<?= view('layouts/header', ['title' => 'Cyber-X-dc']); ?>
<div class="wrapper">
    <div class="container">
        <div class="letters" />
    </div>
    <div class="components">
        <h1>
            Cyber-X-dc
        </h1>
        <div class="btn-group">
            <button>Home</button>
            <button>About</button>
            <button>Contact</button>
        </div>
        <div class="dropdown">
            <button class="dropdown-header">
                <span class="dropdown-selection">Select...</span>
                <span class="dropdown-caret">▼</span>
            </button>
            <div class="dropdown-items-wrapper">
                <ul class="dropdown-items">
                    <li>Option 1</li>
                    <li>Option 2</li>
                    <li>Option 3</li>
                    <li>Option 4</li>
                    <li>Option 5</li>
                </ul>
            </div>
        </div>
        <label class="switch">
            <input type="checkbox">
            <span class="slider"></span>
        </label>
        <div class="text-block">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
        <button class="btn-default">
            Click Me
        </button>
        <input type="text" placeholder="Text">
        <input type="number" placeholder="123">
        <textarea rows="12" cols="64">Placeholder text area</textarea>
    </div>
</div>
<?= view('layouts/footer'); ?>
