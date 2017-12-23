<?php
global $request;
$partyPlotId = $request->session()->pull('partyPlotId', '');
?>
<a href="{{ url('admin/gallery/create/'.$partyPlotId) }}" class="btn btn-primary ladda-button" data-style="zoom-in"><span class="ladda-label"><i class="fa fa-plus"></i> {{ trans('backpack::crud.add') }} {{ $crud->entity_name }}</span></a>