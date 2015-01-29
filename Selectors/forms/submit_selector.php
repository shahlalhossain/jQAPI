<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>jQuery UI Datepicker - Format date</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">

    <style>

        textarea {
            height: 45px;
        }

    </style>


</head>
<body>

<form>
    <table id="exampleTable" border="1" cellpadding="10" align="center">
        <tr>
            <th>
                Element Type
            </th>
            <th>
                Element
            </th>
        </tr>
        <tr>
            <td>
                <input type="button" value="Input Button">
            </td>
        </tr>
        <tr>
            <td>
                <input type="checkbox">
            </td>
        </tr>
        <tr>
            <td>
                <input type="file">
            </td>
        </tr>
        <tr>
            <td>
                <input type="hidden">
            </td>
        </tr>
        <tr>
            <td>
                <input type="image">
            </td>
        </tr>
        <tr>
            <td>
                <input type="password">
            </td>
        </tr>
        <tr>
            <td>
                <input type="radio">
            </td>
        </tr>
        <tr>
            <td>
                <input type="reset">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit">
            </td>
        </tr>
        <tr>
            <td>
                <input type="text">
            </td>
        </tr>
        <tr>
            <td>
                <select><option>Option</option></select>
            </td>
        </tr>
        <tr>
            <td>
                <textarea></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <button>Button</button>
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit">Button type="submit"</button>
            </td>
        </tr>
    </table>
</form>
<div id="result"></div>


<script>
    var submitEl = $( "td :submit" )
        .parent( "td" )
        .css({
            background: "yellow",
            border: "3px red solid"
        })
        .end();
    $( "#result" ).text( "jQuery matched " + submitEl.length + " elements." );
    // Prevent form submission
    $( "form" ).submit(function( event ) {
        event.preventDefault();
    });
    // Extra JS to make the HTML easier to edit (None of this is relevant to the ':submit' selector)
    $( "#exampleTable" ).find( "td" ).each(function( i, el ) {
        var inputEl = $( el ).children(),
            inputType = inputEl.attr( "type" ) ? " type='" + inputEl.attr( "type" ) + "'" : "" ;
        $( el ).before( "" + inputEl[ 0 ].nodeName + inputType + "" );
    })
</script>


</body>
</html>