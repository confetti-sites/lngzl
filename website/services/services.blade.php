@php($page = newRoot(new \model\service)->label('Diensten'))
@extends('website.layouts.main')

@section('head_title', 'Diensten')

@section('content')
    <div class="py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl">
                    {{ $page->text('title')->max(50)->default('Diensten') }}
                </h2>
                <p class="mt-2 text-lg/8 text-gray-600">
                    @include('website.includes.blocks.index', ['model' => $page->content('content')->default('Wij bieden verschillende diensten aan. Van het ontwerpen van een website tot het lanceren van een app voor jouw bedrijf.')])
                </p>
            </div>

            <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                <div>
                    <h3 class="text-2xl font-bold text-gray-900">Website laten bouwen</h3>
                    <p class="mt-2 text-gray-600">Een razendsnelle website nodig voor jouw bedrijf? Wij zorgen ervoor dat jouw website binnen één week al online kan zijn.</p>
                    <p class="mt-2 font-semibold text-gray-900">Dit kan vanaf 99,- excl. btw per maand inclusief premium hosting. Benieuwd? Neem contact op of doe een gratis online scan!</p>
                </div>

                <div>
                    <h3 class="text-2xl font-bold text-gray-900">Ontwerpen</h3>
                    <p class="mt-2 text-gray-600">Voordat we beginnen met bouwen van jouw droomwebsite gaan we eerst samen met jou achterhalen wat jij allemaal nodig hebt op de website.</p>
                    <p class="mt-2 text-gray-600">Op basis van dit gesprek zullen wij een offerte opmaken zodat jij weet waar je aan toe bent. Als jij deze hebt goedgekeurd, zullen wij beginnen met het ontwerpen van jouw nieuwe website.</p>
                </div>

                <div>
                    <h3 class="text-2xl font-bold text-gray-900">Bouwen</h3>
                    <p class="mt-2 text-gray-600">Nadat jij het ontwerp goedgekeurd hebt gaan onze ontwikkelaars aan de slag.</p>
                    <p class="mt-2 text-gray-600">Tijdens dit proces zullen wij jou elke dag of week een update geven over de stand van zaken zodat jij met een gerust hart kan wachten tot wij de website af hebben.</p>
                    <p class="mt-2 text-gray-600">Aan het einde van dit proces vragen wij nog een keer je goedkeuring of alles goed is en dan zullen wij de website publiek maken.</p>
                </div>

                <div>
                    <h3 class="text-2xl font-bold text-gray-900">Onderhouden</h3>
                    <p class="mt-2 text-gray-600">En dan, je website is live en je medewerkers of klanten kunnen de website bezoeken. Super tof!</p>
                    <p class="mt-2 text-gray-600">Maar wat als je een nieuwe pagina nodig hebt? Of iets aangepast wil hebben op de website?</p>
                    <p class="mt-2 text-gray-600">Dat is geen probleem, wij staan altijd voor jou klaar! Stuur ons gerust een mailtje en dan zullen we samen met jou alles regelen.</p>
                </div>

                <div>
                    <h3 class="text-2xl font-bold text-gray-900">Hosting</h3>
                    <p class="mt-2 text-gray-600">Op zoek naar snelle hosting voor een betaalbare prijs? Dan zit je bij LNGZL goed.</p>
                    <p class="mt-2 text-gray-600">Wij nemen alle zorgen bij jou uit handen. Van e-mailhosting tot het maken van backups van je WordPress-website.</p>
                    <h4 class="mt-4 text-xl font-semibold text-gray-900">Altijd inbegrepen:</h4>
                    <ul class="mt-2 text-gray-600 list-disc list-inside">
                        <li>Veel bandbreedte</li>
                        <li>Hosting in Europa</li>
                        <li>Snelle SSD Opslag</li>
                        <li>Basic Support</li>
                        <li>Malware Bescherming</li>
                        <li>Dagelijks een backup</li>
                        <li>DDoS Bescherming</li>
                        <li>Uptime Monitor</li>
                        <li>Snelle Cache & CDN</li>
                        <li>SSL Certificaat van Let's Encrypt</li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-2xl font-bold text-gray-900">Support</h3>
                    <p class="mt-2 text-gray-600">LNGZL is de beste oplossing voor bedrijven die op zoek zijn naar een betaalbaar en betrouwbaar hostingplatform. Met onze betaalbare tariefplannen kun je er zeker van zijn dat je de perfecte hostingoplossing voor jouw behoeften vindt.</p>
                    <p class="mt-2 text-gray-600">Ons klantenserviceteam staat klaar om je te helpen met al jouw vragen of zorgen. We bieden ook een verscheidenheid aan geavanceerde functies en hulpmiddelen die jouw webhostingervaring uitzonderlijk zullen maken.</p>
                    <p class="mt-2 text-gray-600">Als je op zoek bent naar een betrouwbare en betaalbare webhost, zoek dan niet verder dan LNGZL!</p>
                </div>
            </div>

            <div class="mt-16 text-center max-w-md mx-auto">
                <h3 class="text-2xl font-bold text-gray-900">Interesse?</h3>
                <p class="mt-2 text-gray-600">Wij weten zeker dat we jouw droomwebsite binnen no-time online kunnen hebben.</p>
                <div class="mt-6 flex max-w-md gap-x-4">
                {!! model\homepage\newsletter::query()->first()->form->embed() !!}
                </div>
            </div>
        </div>
    </div>
@endsection