<div id="sidebar" class="w-open transition-all float-left h-full">
    <div>
        <button onClick="abcMethod()">
        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
        </button>
    </div>
</div>

<script>
    function abcMethod() {
        var sidebar = document.querySelector('#sidebar');
        var body = document.querySelector('#body');
        if (sidebar.classList.contains('w-open')) {
            sidebar.classList.remove('w-open');
            sidebar.classList.add('w-close');
            body.classList.remove('w-sidebar-open');
            body.classList.add('w-sidebar-close');
        } else {
            sidebar.classList.remove('w-close');
            sidebar.classList.add('w-open');
            body.classList.remove('w-sidebar-close');
            body.classList.add('w-sidebar-open');
        }
    }
</script>
