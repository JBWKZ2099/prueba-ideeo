<div class="tab-pane fade show active" id="tab1">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <th>
                                            {{ trans('validation.attributes.name') }}
                                        </th>
                                        <td>
                                            {{ $item->name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('validation.attributes.email') }}
                                        </th>
                                        <td>
                                            {{ $item->email }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('validation.attributes.message') }}
                                        </th>
                                        <td>
                                            {{ $item->message }}
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
