<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <p>
      New Inbox From : {{$request->email}}
    </p>

    <table>
      <tr>
        <th>
          <label>
            Name
          </label>
        </th>
        <td>
          <label>
            {{$request->name}}
          </label>
        </td>
      </tr>
      <tr>
        <th>
          <label>
            Email
          </label>
        </th>
        <td>
          <label>
            {{$request->email}}
          </label>
        </td>
      </tr>
      <tr>
        <th>
          <label>
            Message
          </label>
        </th>
        <td>
          <label>
            {{$request->message}}
          </label>
        </td>
      </tr>
    </table>

  </body>
</html>
