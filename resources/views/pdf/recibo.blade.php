<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        @page {
            margin: 15mm;
            size: A4;
        }
        body {
            font-family: Helvetica, Arial, sans-serif;
            font-size: 7pt;
            line-height: 9pt;
            color: #333;
        }
        .header {
            margin-bottom: 7mm;
        }
        .header-left {
            font-size: 8pt;
            font-weight: bold;
        }
        .header-right {
            font-size: 9pt;
            font-weight: bold;
            text-align: right;
        }
        .main-title {
            font-size: 10pt;
            font-weight: bold;
            text-align: center;
            margin-bottom: 5mm;
        }
        .employee-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 9mm;
            font-size: 7pt;
        }
        .employee-table td {
            border: 0.45px solid #C2C2C2;
            padding: 3px 4px;
            vertical-align: middle;
        }
        .employee-table .label {
            background-color: #F5F5F5;
            font-weight: bold;
            width: 28mm;
        }
        .payroll-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 9mm;
            font-size: 7pt;
        }
        .payroll-table th {
            background-color: #F1F1F1;
            border: 0.45px solid #B7B7B7;
            padding: 4px 5px;
            text-align: center;
            font-weight: bold;
        }
        .payroll-table td {
            border: 0.45px solid #B7B7B7;
            padding: 4px 5px;
            vertical-align: middle;
        }
        .payroll-table .concepto {
            width: 112mm;
        }
        .payroll-table .asign {
            width: 31mm;
            text-align: right;
        }
        .payroll-table .deduc {
            width: 31mm;
            text-align: right;
        }
        .payroll-table .total-label {
            font-weight: bold;
            text-align: right;
        }
        .payroll-table .total-money {
            font-weight: bold;
            text-align: right;
        }
        .summary-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 12mm;
            font-size: 7pt;
        }
        .summary-table td {
            border: 0.55px solid #AFAFAF;
            padding: 5px;
            vertical-align: middle;
        }
        .summary-table .label {
            font-weight: bold;
            width: 130mm;
        }
        .summary-table .money {
            text-align: right;
            font-weight: bold;
            width: 44mm;
        }
        .summary-table .net-label {
            font-weight: bold;
            font-size: 8pt;
        }
        .summary-table .net-money {
            font-weight: bold;
            font-size: 9pt;
            text-align: right;
        }
        .summary-table .net-row {
            background-color: #EAEAEA;
        }
        .footer {
            font-size: 6.5pt;
            color: #666666;
            text-align: center;
            margin-top: 12mm;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <table class="header" style="width: 100%;">
        <tr>
            <td class="header-left">
                <img src="data:image/png;base64,{{ file_get_contents(public_path('images/corposalud_base64.txt')) }}" alt="CORPOSALUD" style="width: 80px; height: 80px;">
            </td>
            <td class="header-right">
                <b>República Bolivariana de Venezuela</b><br>
                Corporación de Salud del Estado Táchira
            </td>
        </tr>
    </table>

    <div class="main-title">
        <b>RECIBO DE PAGO</b><br>
        CORPO - EMPLEADOS CONTRATADOS - {{ $mes }}/{{ $anio }}
    </div>

    <!-- Employee Data -->
    <table class="employee-table">
        <tr>
            <td class="label"><b>Nombre:</b></td>
            <td>{{ $trabajador->nombrescompleto }}</td>
            <td class="label"><b>Período:</b></td>
            <td>{{ $mes }}/{{ $anio }}</td>
        </tr>
        <tr>
            <td class="label"><b>Ficha / Código:</b></td>
            <td>{{ $trabajador->id_trabajador }}</td>
            <td class="label"><b>Cédula:</b></td>
            <td>{{ $trabajador->cedula }}</td>
        </tr>
        <tr>
            <td class="label"><b>Departamento:</b></td>
            <td>{{ $trabajador->departamento }}</td>
            <td class="label"><b>Cuenta:</b></td>
            <td>{{ $trabajador->cuenta_nomina }}</td>
        </tr>
        <tr>
            <td class="label"><b>Cargo:</b></td>
            <td>{{ $trabajador->descripcion_cargo }}</td>
            <td class="label"><b>Nómina:</b></td>
            <td>{{ $trabajador->nomina }}</td>
        </tr>
    </table>

    <!-- Primera Quincena -->
    @if($primeraQuincena->count() > 0)
    <table class="payroll-table">
        <thead>
            <tr>
                <th class="concepto">NÓMINA DE PRIMERA QUINCENA</th>
                <th class="asign">ASIG</th>
                <th class="deduc">DEDUC</th>
            </tr>
        </thead>
        <tbody>
            @foreach($primeraQuincena as $recibo)
            <tr>
                <td>{{ $recibo->descripcion }}</td>
                <td class="asign">{{ number_format($recibo->monto_asigna, 2, ',', '.') }}</td>
                <td class="deduc">{{ number_format($recibo->monto_deduce, 2, ',', '.') }}</td>
            </tr>
            @endforeach
            <tr>
                <td class="total-label"><b>Total:</b></td>
                <td class="total-money"><b>{{ number_format($primeraQuincena->sum('monto_asigna'), 2, ',', '.') }}</b></td>
                <td class="total-money"><b>{{ number_format($primeraQuincena->sum('monto_deduce'), 2, ',', '.') }}</b></td>
            </tr>
            <tr>
                <td class="total-label"><b>Neto:</b></td>
                <td class="total-money" colspan="2"><b>{{ number_format($primeraQuincena->sum('monto_asigna') - $primeraQuincena->sum('monto_deduce'), 2, ',', '.') }}</b></td>
            </tr>
        </tbody>
    </table>
    @endif

    <!-- Segunda Quincena -->
    @if($segundaQuincena->count() > 0)
    <table class="payroll-table">
        <thead>
            <tr>
                <th class="concepto">NÓMINA DE SEGUNDA QUINCENA</th>
                <th class="asign">ASIG</th>
                <th class="deduc">DEDUC</th>
            </tr>
        </thead>
        <tbody>
            @foreach($segundaQuincena as $recibo)
            <tr>
                <td>{{ $recibo->descripcion }}</td>
                <td class="asign">{{ number_format($recibo->monto_asigna, 2, ',', '.') }}</td>
                <td class="deduc">{{ number_format($recibo->monto_deduce, 2, ',', '.') }}</td>
            </tr>
            @endforeach
            <tr>
                <td class="total-label"><b>Total:</b></td>
                <td class="total-money"><b>{{ number_format($segundaQuincena->sum('monto_asigna'), 2, ',', '.') }}</b></td>
                <td class="total-money"><b>{{ number_format($segundaQuincena->sum('monto_deduce'), 2, ',', '.') }}</b></td>
            </tr>
            <tr>
                <td class="total-label"><b>Neto:</b></td>
                <td class="total-money" colspan="2"><b>{{ number_format($segundaQuincena->sum('monto_asigna') - $segundaQuincena->sum('monto_deduce'), 2, ',', '.') }}</b></td>
            </tr>
        </tbody>
    </table>
    @endif

    <!-- Pagos Adicionales -->
    @if($pagosAdicionales->count() > 0)
    <table class="payroll-table">
        <thead>
            <tr>
                <th class="concepto">PAGOS ADICIONALES</th>
                <th class="asign">ASIG</th>
                <th class="deduc">DEDUC</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pagosAdicionales as $recibo)
            <tr>
                <td>{{ $recibo->descripcion }}</td>
                <td class="asign">{{ number_format($recibo->monto_asigna, 2, ',', '.') }}</td>
                <td class="deduc">{{ number_format($recibo->monto_deduce, 2, ',', '.') }}</td>
            </tr>
            @endforeach
            <tr>
                <td class="total-label"><b>Total:</b></td>
                <td class="total-money"><b>{{ number_format($pagosAdicionales->sum('monto_asigna'), 2, ',', '.') }}</b></td>
                <td class="total-money"><b>{{ number_format($pagosAdicionales->sum('monto_deduce'), 2, ',', '.') }}</b></td>
            </tr>
            <tr>
                <td class="total-label"><b>Neto:</b></td>
                <td class="total-money" colspan="2"><b>{{ number_format($pagosAdicionales->sum('monto_asigna') - $pagosAdicionales->sum('monto_deduce'), 2, ',', '.') }}</b></td>
            </tr>
        </tbody>
    </table>
    @endif
</body>
</html>
