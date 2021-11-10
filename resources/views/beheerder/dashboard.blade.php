@extends('layouts.app')

@section('content')

    <div class="dashboard-home">
        <div class="top">
        <div class="home">
            <h1><span>H</span>ome</h1>

            <p>
            Op deze geweldige pagina kunt u naar personeel leveringen Ik moet deze even
            volschrijven zodat het interessanter lijkt dan het is. Ik ben Op deze geweldige pagina
            kunt u naar personeel leveringen Ik moet deze even volschrijven zodat het interessanter
            lijkt dan het is.
            </p>
        </div>

        <div class="reserveringen">
            <h1>Reserveringen</h1>
            <div class="reservering__header">
            <h3>Datum</h3>
            <h3>Aantal reserveringen</h3>
            </div>

            <div class="reservering__item">
            <p>8-9-2021</p>
            <p>27</p>
            </div>
            <div class="reservering__item">
            <p>8-9-2021</p>
            <p>27</p>
            </div>

            <button class="btn-bekijken">Bekijk alles</button>
        </div>
        </div>

        <div class="bottom">
        <div class="personeel">
            <h1 class="header">Nieuw Personeel</h1>
            <div class="item">
            <img src="../img/person-1.png" alt="foto" />
            <div class="item__details">
                <h3>Anthenny de Hoon</h3>
                <p>Directeur</p>
            </div>
            </div>
            <div class="item">
            <img src="../img/person-1.png" alt="foto" />
            <div class="item__details">
                <h3>Anthenny de Hoon</h3>
                <p>Directeur</p>
            </div>
            </div>
            <div class="item">
            <img src="../img/person-1.png" alt="foto" />
            <div class="item__details">
                <h3>Anthenny de Hoon</h3>
                <p>Directeur</p>
            </div>
            </div>
            <button class="btn-bekijken">Bekijk alles</button>
        </div>

        <div class="laatste-leveringen">
            <h1 class="header">Laatste leveringen</h1>

            <table>
            <thead>
                <th>Bedrijf</th>
                <th>Datum</th>
                <th>Bedrag</th>
                <th>Status</th>
            </thead>
            <tbody>
                <tr>
                <td>Hanos</td>
                <td>10-9-2021</td>
                <td class="amount">$399.00</td>
                <td><p class="status status-unpaid">Onbetaald</p></td>
                </tr>
                <tr>
                <td>Schmidt</td>
                <td>8-9-2021</td>
                <td class="amount">$300.00</td>
                <td><p class="status status-paid">Betaald</p></td>
                </tr>
                <tr>
                <td>Sligro</td>
                <td>12-9-2021</td>
                <td class="amount">$234.00</td>
                <td><p class="status status-pending">Pending</p></td>
                </tr>
                <tr>
                <td>Hanos</td>
                <td>10-9-2021</td>
                <td class="amount">$219.00</td>
                <td><p class="status status-paid">Betaald</p></td>
                </tr>
            </tbody>
            </table>
            <button class="btn-bekijken">Bekijk alles</button>
        </div>
        </div>
    </div>

@endsection