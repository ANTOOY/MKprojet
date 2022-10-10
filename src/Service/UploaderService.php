<?php  
namespace App\Service;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;

class UploaderService
{
    private $slugger;
    private $imageDirectory;

    public function __construct(SluggerInterface $slugger)
    {
        $this->slugger = $slugger;
        $this->imageDirectory = "uploads/images/";

    }
    
     public function upload(UploadedFile $newFile, string $oldPath = ""): string
     {
        $originalFilename = pathinfo($newFile->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFilename = $this->slugger->slug($originalFilename);
        $finalFilename = "$safeFilename" . uniqid() . '.' . $newFile->guessExtension();
        $newFile->move($this->imageDirectory,$finalFilename);
        $this->delete($oldPath);
         return  $finalFilename;
     }  
    
     public function delete(string $oldPath): void
     {
         if ($oldPath) {
             unlink($this->imageDirectory . $oldPath);
         }
     }
}