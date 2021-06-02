@extends('layouts.main')

@section('contenu')
    <div class="container mt-5 ">
    <div class="card shadow">
        <div class="card-header">
            <h3 class="card-title">Mes Paiements</h3>
        </div>
        <div class="table-responsive">
            <table class="table card-table table-vcenter text-nowrap datatable">
                <thead>
                    <tr>
                        <th>Bien</th>
                        <th>Locataire</th>
                        <th>Mois</th>
                        <th>Date de paiement</th>
                        <th>Montant</th>
                        <th>Quittance</th>
                        <th>Quittance</th>
                    </tr>
                </thead>
                <tbody>
                  
                    <tr>
                        <td>
                           
                        </td>
                        <td>
                           
                        </td>
                        <td>
                           
                        </td>
                        <td>
                           
                        </td>
                        <td>

                        </td>
                        <td><a href="">Voir quittance</a></td>
                         <td><a href="">Voir quittance</a></td>
                    </tr>

                    
                  
                </tbody>
            </table>
            <script>
                require(['datatables', 'jquery'], function(datatable, $) {
                    $('.datatable').DataTable();
                });
            </script>
        </div>
    </div>
</div>

@endsection