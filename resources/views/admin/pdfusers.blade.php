<h2>New Student Orientation System Users</h2>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Reg Number</th>
        <th scope="col">School</th>
        <th scope="col">Email</th>
        <th scope="col">Progress</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->first_name }}</td>
            <td>{{ $user->last_name }}</td>
            <td>{{ $user->registration_number }}</td>
            <td>{{ $user->school }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->progress }}%</td>
        </tr>
    @endforeach
    </tbody>
</table>
