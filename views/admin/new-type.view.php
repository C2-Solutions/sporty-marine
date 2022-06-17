<h1 style="color: dimgray; text-align: center">Nieuw Boottype</h1>

<div class="card-body center">
    <table>
        <form method="post" action="/new-type" class="type-new-form">
        <tr>
            <td>
                <input type="text" id="type" name="type" required
                       autofocus placeholder="Typ hier de naam van uw type boot">
            </td>
            <td>
                <input type="submit" name="new" value="Aanmaken" class="btn btn-primary"
                       onclick="return confirm('Weet je zeker dat je deze wilt aanmaken?')">
            </td>
        </tr>
        <form>
    </table>
</div>