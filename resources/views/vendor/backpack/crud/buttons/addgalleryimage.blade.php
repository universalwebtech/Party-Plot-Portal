<?php
echo $ppartyPlotId = \Route::current()->parameter('partyPlotId');
?>

<a href="{{ url('admin/gallery/create', [$entry->getKey()]) }}" class="btn btn-xs btn-default"><i class="fa fa-file-text-o"></i> {{trans('Add More Image')}}</a>