<?php

namespace App\Imports;

use App\Record;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

/**
 * Class RecordsWithHeaderImport
 * drg >> Add records from excel rows with header
 *
 * @package App\Imports
 */
class RecordsWithHeaderImport implements ToModel, WithHeadingRow
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
            // drg >> add rows to DB
            'upload_id'       => $this->uploadId,
            'user_id'         => Auth::id(),
            'isrc'            => $row['isrc'],
            'artist'          => $row['artist'],
            'product_title'   => $row['product_title'],
            'container_title' => $row['container_title'],
            'label'           => $row['label'],
            'country'         => $row['country'],
            'total_plays'     => $row['total_plays'],
            'revenue'         => $row['revenue'],
            'start_at'        => $row['start_at'],
            'end_at'          => $row['end_at']
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
