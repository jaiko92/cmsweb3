<?php

namespace Modules\Streaming\Actions;

use TCG\Voyager\Actions\AbstractAction;

class Profiles extends AbstractAction
{
    public function getTitle()
    {
        return 'Perfiles';
    }

    public function getIcon()
    {
        // return 'voyager-pen';
    }

    public function getPolicy()
    {
        return 'browse';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-default',
        ];
    }

    public function getDefaultRoute()
    {
        return route('voyager.profiles.index', 'key=account_id&filter=equals&s='.$this->data->{$this->data->getKeyName()});
    }
    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'accounts';
    }
}