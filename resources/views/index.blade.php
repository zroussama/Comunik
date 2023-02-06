<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Portfolios</title>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Contrat</th>
                    <th>Date Contrat</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($portfolios as $portfolio)
                    <tr>
                        <td>{{ $portfolio->id }}</td>
                        <td>{{ $portfolio->contrat }}</td>
                        <td>{{ $portfolio->date_contrat }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>
