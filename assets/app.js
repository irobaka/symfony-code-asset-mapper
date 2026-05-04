import './stimulus_bootstrap.js';
import './styles/app.css';

import Vinyl from "./lib/vinyl.js";
import camelCase from 'lodash/camelCase.js';

const mix = new Vinyl('Awesome Mix Vol. 1', 2014);
console.log(camelCase(mix.describe()));
