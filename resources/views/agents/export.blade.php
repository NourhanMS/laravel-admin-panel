
        <table class="col-md-12">
            <thead>
                <tr>
                <th>Agent name</th>
                <th >Email</th>
                <th >Phone</th>
                </tr>
            </thead>
            <tbody>
            @foreach($agents as $agent)
                <tr>
                    <td>{{ $agent->name }}</td>
                    <td>{{ $agent->email }}</td>
                    <td>{{ $agent->phone }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>  