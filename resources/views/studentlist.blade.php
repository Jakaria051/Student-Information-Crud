<div class="card mb-3">
    <img src="https://cdn.pixabay.com/photo/2015/05/19/14/55/educational-773651_960_720.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">List of students</h5>
        <p class="card-text">You can find here all the informatins about students in the system</p>



<table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col">CNE</th>
            <th scope="col">First name</th>
            <th scope="col">Second Name</th>
            <th scope="col">Age</th>
            <th scope="col">Speciality</th>
            <th scope="col">Operations</th>

        </tr>
    </thead>
    <tbody>
        @foreach($students as $students)
        <tr>

            <td> {{ $students->One }} </td>
            <td> {{ $students->firstName }} </td>
            <td> {{ $students->SecondName }} </td>
            <td> {{ $students->age }} </td>
            <td> {{ $students->Speciality }} </td>


            <td>
               <!-- <a href="#" class="btn btn-sm btn-info">Show</a> -->
                <a href="{{ url('/edit/'.$students->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <!--<a href="#" class="btn btn-sm btn-danger">Delete</a> -->
            </td>

        </tr>
        @endforeach

    </tbody>
</table>

</div>
</div>