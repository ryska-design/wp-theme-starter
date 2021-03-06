/**
 * Setup webpack public path
 * to enable lazy-including of
 * js chunks
 *
 */
import './vendor/webpack.publicPath';

/**
 * Your theme's js starts
 * here...
 */
import './scripts/preloader';
import './scripts/auto-hide-header';
import './scripts/modal';

// silly example:
import obj from './scripts/example';

/* eslint no-console: 0 */
console.log(obj);
