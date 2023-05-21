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
                        <div class="form-group">
                            <label for="account">Account</label>
                            <select name="account" id="account" class="form-control" required>
                                <option value="">Select</option>
                                @foreach($accounts as $account)
                                    <option value="{{$account->id}}">{{$account->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="amount">Amount</label>
                            <input type="number" name="amount" id="amount" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="type">Account</label>
                            <select name="type" id="type" class="form-control" required>
                                <option value="">Select</option>
                                <option value="Type One">Type One</option>
                                <option value="Type Two">Type Two</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="type">Date</label>
                            <input type="date" name="date" id="date" class="form-control" required />
                        </div>
                        <input type="submit" name="submit" value="Save" class="btn btn-success" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
