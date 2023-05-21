<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Transaction') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="row justify-content-end">
                        <div class="col-2">
                            <a class="btn btn-primary" href="{{route('transaction.create')}}">Make Transaction</a>
                        </div>
                    </div>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <th>S.N</th>
                            <th>Transaction Type</th>
                            <th>Transaction Account</th>
                            <th>Date</th>
                            <th>Amount</th>
                        </thead>
                        <tbody>
                        @if($transactions->count() > 0)
                            @foreach($transactions as $transaction)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$transaction->type}}</td>
                                    <td>{{$transaction->account->name}}</td>
                                    <td>{{$transaction->date}}</td>
                                    <td>{{$transaction->amount}}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="5"> No Transaction Found!</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
