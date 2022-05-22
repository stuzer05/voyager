<?php

namespace TCG\Voyager\Events;

use Illuminate\Queue\SerializesModels;
use TCG\Voyager\Models\DataType;

class BreadDataBeforeUpdated
{
    use SerializesModels;

    public $dataType;

	public $dataOld;

	public $dataNew;

    public function __construct(DataType $dataType, $dataOld, $dataNew)
    {
        $this->dataType = $dataType;

        $this->dataOld = $dataOld;

		$this->dataNew = $dataNew;
    }
}
