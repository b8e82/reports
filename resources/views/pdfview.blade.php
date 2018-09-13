


  <tbody>
  @foreach ($measurements as $measurement)
                
  <tr>
    <th scope="row">{{ $measurement->fibra }}</th>
    <td>{{ $measurement->atiate1310 }}</td>
    <td>{{ $measurement->atiate1550 }}</td>
    <td>{{ $measurement->ateati1310 }}</td>
    <td>{{ $measurement->ateati1550 }}</td>
    <td>{{ $measurement->atizap1310 }}</td>
    <td>{{ $measurement->atizap1550 }}</td>
    <td>{{ $measurement->zapati1310 }}</td>
    <td>{{ $measurement->zapati1550 }}</td>
  </tr>

@endforeach
  </tbody>
</table>
</div><br>




