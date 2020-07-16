// import external dependencies
import 'jquery';
import 'slick-carousel/slick/slick.min';

import 'venobox';

// Import everything from autoload
import './autoload/**/*'

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import approach from './routes/approach';
import aboutUs from './routes/about';
import blog from './routes/blog';
import services from './routes/services';
import projects from './routes/projects';
import pageTemplateTemplateProjectArchive from './routes/project-archive';
import studio from './routes/studio';
import pageTemplateTemplateContact from './routes/contact';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
  // Approach page
  approach,
  // blog page
  blog,
  // services page
  services,
  // Projects Overview page
  projects,
  // Project Archive
  pageTemplateTemplateProjectArchive,
  // Studio Page
  studio,
  // Contact Page
  pageTemplateTemplateContact,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());