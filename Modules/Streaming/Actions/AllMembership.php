<?php

namespace Modules\Streaming\Actions;

use TCG\Voyager\Actions\AbstractAction;

class AllMembership extends AbstractAction
{
    public function getTitle()
    {
        return 'Membresias';
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
            'class' => 'btn btn-sm btn-primary',
        ];
    }

    public function getDefaultRoute()
    {
        // return route('voyager.details.index');
    }
    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'accounts';
    }
    public function massAction($ids, $comingFrom)
{
    // Do something with the IDs
    return redirect()->route('voyager.memberships.index');
}
}