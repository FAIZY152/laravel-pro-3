<div>
    <h1>Equilent And Query builder </h1>
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
    <table border="1">
        <tr>
            <th>
            Name
        </th>
        <th>
            Email
        </th>
        <th>
            Age
        </th>
        </tr>

      @foreach ($users as  $user )
       <tr>
           {{-- <td>{{ $user['name'] }}</td>
          <td>{{ $user['email'] }}</td>
          <td>{{ $user['age'] }}</td> --}}
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ $user->age }}</td>
       </tr>
      @endforeach
    </table>
</div>
