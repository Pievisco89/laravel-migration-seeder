@extends('layouts.main')

@section('content')

    <section class="container">

      <h1 class="m-5 text-center">Pacchetti viaggi:</h1>
        
      <section>

        <table class="table">
          <thead>
            <tr>
              <th scope="col">Stato:</th>
              <th scope="col">Città</th>
              <th scope="col">Partenza:</th>
              <th scope="col">Giorni</th>
              <th scope="col">Tipo:</th>
              <th scope="col">Prezzo:</th>
            </tr>
          </thead>
          <tbody>

            @foreach ($holidays as $holiday)
                        
              <tr>
                <td>{{ $holiday['state'] }}</td>
                <td>{{ $holiday['place'] }}</td>
                <td>{{ $holiday['date_start'] }}</td>
                <td>{{ $holiday['duration'] }}</td>
                <td>{{ $holiday['type'] }}</td>
                <td>{{ $holiday['price'] }}€</td>
              </tr>
    
            @endforeach
                
          </tbody>
        </table>

      </section>

      <section class="mt-3">
        {{ $holidays->links() }}
      </section>


        
    </section>

@endsection