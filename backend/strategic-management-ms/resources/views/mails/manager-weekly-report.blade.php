@component('mail::message')
# Relatório Semanal: {{now()->startOfWeek()->format('d/m/Y')}} - {{now()->endOfWeek()->format('d/m/Y')}}

Olá,

Segue anexo o relatório gerencial semanal referente à semana {{now()->startOfWeek()->format('d/m/Y')}} - {{now()->endOfWeek()->format('d/m/Y')}}

Obrigado,<br>
Boa Entrega.
@endcomponent
