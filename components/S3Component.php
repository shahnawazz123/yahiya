<?php
namespace app\components;

use Aws\S3\Exception\S3Exception;
use Aws\S3\S3Client;
use Yii;
use yii\base\Component;

class S3Component extends Component{
    private $s3Client;

    public function __construct(){
        $this->s3Client = new S3Client([
            'version' => 'latest',
            'region' => 'your_s3_bucket_region',
            'credentials' => Yii::$app->params['credentials'],
        ]);
    }

    public function uploadFile($bucketName, $filePath, $fileName){
        try {
            $result = $this->s3Client->putObject([
                'Bucket' => $bucketName,
                'Key' => $fileName,
                'SourceFile' => $filePath,
            ]);

            return $result['@metadata']['statusCode'] === 200;
        } catch (S3Exception $e) {
            Yii::error('S3 Upload Error: ' . $e->getMessage());
            return false;
        }
    }

    public function downloadFile($bucketName, $fileName, $savePath){
        try {
            $result = $this->s3Client->getObject([
                'Bucket' => $bucketName,
                'Key' => $fileName,
            ]);

            file_put_contents($savePath, $result['Body']);

            return true;
        } catch (S3Exception $e) {
            Yii::error('S3 Download Error: ' . $e->getMessage());
            return false;
        }
    }

    public function deleteFile($bucketName, $fileName){
        try {
            $this->s3Client->deleteObject([
                'Bucket' => $bucketName,
                'Key' => $fileName,
            ]);

            return true;
        } catch (S3Exception $e) {
            Yii::error('S3 Delete Error: ' . $e->getMessage());
            return false;
        }
    }

    /**
     * Generates the object URL for a file in the S3 bucket.
     * @param string $fileName the name of the file in the S3 bucket
     * @return string the URL of the file in the S3 bucket
    */
    public function getObjectUrl($fileName){
        try {
            return $this->s3Client->getObjectUrl($this->bucket, $fileName);
        } catch (S3Exception $e) {
            Yii::error('S3 Get Object URL Error: ' . $e->getMessage());
            return '';
        }
    }

    public function listFiles($bucketName){
        try {
            $result = $this->s3Client->listObjects([
                'Bucket' => $bucketName,
            ]);

            return $result['Contents'];
        } catch (S3Exception $e) {
            Yii::error('S3 List Error: ' . $e->getMessage());
            return [];
        }
    }
}