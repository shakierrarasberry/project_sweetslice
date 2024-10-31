<div>
    <h1>Daftar Pengguna</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
               
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                  
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
