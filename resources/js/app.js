import './bootstrap';
import 'bootstrap';
import './main';
import './detail';

if (window.location.pathname === '/detail/{type}') {
    require('./detail');
};

if (window.location.pathname === '/') {
    require('./main');
}