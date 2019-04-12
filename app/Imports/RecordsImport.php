<?php

namespace App\Imports;

use App\Record;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToModel;

class RecordsImport implements ToModel
{
    private $rows = 0;
    private $uploadId = 0;
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        ++$this->rows;
        return new Record([
            //
            'upload_id'       => $this->uploadId,
            'user_id'         => Auth::id(),
            'isrc'            => $row[0],
            'artist'          => $row[1],
            'product_title'   => $row[2],
            'container_title' => $row[3],
            'label'           => $row[4],
            'country'         => $row[5],
            'total_plays'     => $row[6],
            'revenue'         => $row[7],
            'start_at'        => $row[8],
            'end_at'          => $row[9]
        ]);
    }

    public function getRowCount()
    {
        return $this->rows;
    }

    public function setUploadId($id)
    {
        $this->uploadId = $id;
    }
}
