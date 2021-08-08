@extends('our.ourwelcome')
@section('content')
    <div class='flex justify-center'>
        <div class='w-3/12 p-4 rounded-lg bg-gray-200'>
            <form action="{{route('ourlogin')}}" method="post">
                @csrf
                @if (session('status'))
                    <div class="bg-red-500 p-4 rounded-lg mb-6 text-black text-center">
                        {{session('status')}}
                    </div>

                @endif
                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="email" id="email" placeholder="Your email" 
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" 
                    value="{{ old('email') }}">
                    @error('email')
                        <div class="text-green-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Choose a password" 
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror" 
                    value="">
                    @error('password')
                        <div class="text-green-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                

                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Login</button>
                </div>

            </form>
        </div>
    </div>
@endsection