import React from 'react';
import { createRoot } from 'react-dom/client';
import './bootstrap'; // Keeps Laravel's default Axios setup working

function MainApp() {
    return (
        <div className="p-6">
            <h1>Hello from React inside Laravel 12!</h1>
        </div>
    );
}

function AnotherApp() {
    return (
        <div>
            <h2>Hello I'm from another page</h2>
        </div>
    );
}

const container = document.getElementById('app');
const box = document.getElementById('box');
if (container) {
    createRoot(container).render(<MainApp />);
}
if (box) {
    createRoot(box).render(<AnotherApp />)
}