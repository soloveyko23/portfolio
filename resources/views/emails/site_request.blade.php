<table style="width: 100%;">
  @if(isset($user_email))
  <tr>
    <td style="padding: 10px; border: #e9e9e9 1px solid;"><b>E-mail</b></td>
    <td style="padding: 10px; border: #e9e9e9 1px solid;"> {{ $user_email }}</td>
  </tr>
  @endif

  @if(isset($url))
  <tr>
    <td style="padding: 10px; border: #e9e9e9 1px solid;"><b>Страница</b></td>
    <td style="padding: 10px; border: #e9e9e9 1px solid;">{{ $url }}</td>
  </tr>
  @endif

  @if (isset($quantity))
  <tr>
    <td style="padding: 10px; border: #e9e9e9 1px solid;"><b>Количество товаров</b></td>
    <td style="padding: 10px; border: #e9e9e9 1px solid;">{{ $quantity }}</td>
  </tr>
  @endif

  @if(isset($systems_1))
  <tr>
    <td style="padding: 10px; border: #e9e9e9 1px solid;"><b>Подключение 1C</b></td>
    <td style="padding: 10px; border: #e9e9e9 1px solid;">Да</td>
  </tr>
  @endif

  @if (isset($systems_2))
  <tr>
    <td style="padding: 10px; border: #e9e9e9 1px solid;"><b>Подключение CRM</b></td>
    <td style="padding: 10px; border: #e9e9e9 1px solid;">Да</td>
  </tr>
  @endif
  @if (isset($systems_3))
  <tr>
    <td style="padding: 10px; border: #e9e9e9 1px solid;"><b>Подключение системы оплаты</b></td>
    <td style="padding: 10px; border: #e9e9e9 1px solid;">Да</td>
  </tr>
  @endif

  @if (isset($systems_4))
  <tr>
    <td style="padding: 10px; border: #e9e9e9 1px solid;"><b>Подключение служб доставки</b></td>
    <td style="padding: 10px; border: #e9e9e9 1px solid;">Да</td>
  </tr>
  @endif

  @if(isset($multilang))
  <tr>
    <td style="padding: 10px; border: #e9e9e9 1px solid;"><b>Мультиязычность</b></td>
    <td style="padding: 10px; border: #e9e9e9 1px solid;">{{ $multilang }}</td>
  </tr>
  @endif

  @if (isset($sphere))
  <tr>
    <td style="padding: 10px; border: #e9e9e9 1px solid;"><b>Сфера деятельности</b></td>
    <td style="padding: 10px; border: #e9e9e9 1px solid;">{{ $sphere }}</td>
  </tr>
  @endif

  <tr style="background-color: #f8f8f8;">
    <td style="padding: 10px; border: #e9e9e9 1px solid;"><b>Имя</b></td>
    <td style="padding: 10px; border: #e9e9e9 1px solid;">{{ $user_name }}</td>
  </tr>
  <tr>
    <td style="padding: 10px; border: #e9e9e9 1px solid;"><b>Телефон</b></td>
    <td style="padding: 10px; border: #e9e9e9 1px solid;">{{ $user_phone }}</td>
  </tr>

  @if(isset($user_message))
  <tr>
    <td style="padding: 10px; border: #e9e9e9 1px solid;"><b>Сообщение</b></td>
    <td style="padding: 10px; border: #e9e9e9 1px solid;">{{ $user_message }}</td>
  </tr>
  @endif

</table>
