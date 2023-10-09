<div class="container-fluid">
    <div class="row">
        <div class="col-12 mb-2">
            <div class="text-end">
                <a href="{{ route('contract.create') }}" type="button" class="btn btn-primary">Add new</a>
            </div>
        </div>
        <div class="col-12">
            @if(!empty($contracts))
                <div class="paginator__container text-end">
                    {!! $contracts->appends(\Request::except('page'))->render() !!}
                </div>
                <div class="table-responsive-md">
                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">@sortablelink('contract_name', 'Name')</th>
                            <th scope="col">@sortablelink('contract_name', 'Description')</th>
                            <th scope="col">@sortablelink('created_at', 'Created at')</th>
                            <th scope="col" width="150px"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($contracts as $contract)
                            <tr>
                                <td>{{ $contract->contract_name }}</td>
                                <td>{{ $contract->description }}</td>
                                <td>{{ date('Y-m-d H:i', strtotime($contract->created_at)) }}</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-outline-primary dropdown-toggle" data-coreui-toggle="dropdown" aria-expanded="false">
                                            Action
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{ route('contract.edit', ['id' => $contract->id]) }}"><i class="fa-solid fa-pen me-2"></i>Edit</a></li>
                                            <li><button class="dropdown-item" wire:click="delete({{$contract->id}})"><i class="fa-regular fa-trash-can me-2"></i>Delete</button></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="paginator__container text-end">
                    {!! $contracts->appends(\Request::except('page'))->render() !!}
                </div>
            @endif
        </div>
    </div>
</div>
