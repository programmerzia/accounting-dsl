<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Make Transaction') }}
        </h2>
    </x-slot>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                <li>{{$errors->first()}}</li>
            </ul>
        </div>
    @endif
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
    @endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="row justify-content-end">
                        <div class="col-2">
                            <a class="btn btn-primary" href="{{route('transaction.index')}}">Back to List</a>
                        </div>
                    </div>
                    <form action="{{route('transaction.store')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <labe for="account">Account</labe>
                            <select class="form-select" aria-label="Default Select Account" name="account" id="account" required>
                                <option selected value="">Open this select menu</option>
                                @foreach($accounts as $account)
                                    <option value="{{$account->id}}">{{$account->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="amount" class="form-label">Amount</label>
                            <input type="number" name="amount" class="form-control" id="amount" onchange="if(this.value < 1){this.value = '';alert('Amount should be positive');return false;}" required>
                        </div>
                        <div class="mb-3">
                            <select class="form-select" aria-label="Default Select Type" name="type" id="type" required>
                                <option selected>Open this select menu</option>
                                <option value="Type One">Type One</option>
                                <option value="Type Two">Type Two</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="type">Date</label>
                            <input type="date" name="date" id="date" class="form-control" required />
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary" style="background: #2563eb!important;">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
