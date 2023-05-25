@if(Session::has('success'))
<div class="fixed bottom-5 right-5">
    <p class="px-12 py-2 bg-green-400 text-white font-bold text-xl " id="message">{{Session('success')}}</p>
    <script>
        setTimeout(() => {
            $('#message').fadeOut(1000);
        }, 1000);
    </script>
</div>
@endif
@if(Session::has('error'))
<div class="fixed bottom-5 right-5">
    <p class="px-12 py-2 bg-green-500 text-white font-bold text-xl " id="message">{{Session('error') }}</p>
    <script>
        setTimeout(() => {
            $('#message').fadeOut(1000);
        }, 1000);
    </script>
</div>
@endif