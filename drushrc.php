<?php 


$options['sites'] = array (
  0 => 'qasstl.org',
);
$options['profiles'] = array (
  0 => 'openchurch',
);
$options['packages'] = array (
  'base' => 
  array (
    'modules' => 
    array (
      'contextual' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/contextual/contextual.module',
        'basename' => 'contextual.module',
        'name' => 'contextual',
        'info' => 
        array (
          'name' => 'Contextual links',
          'description' => 'Provides contextual links to perform actions related to elements on a page.',
          'package' => 'Core',
          'version' => '7.28',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'contextual.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'profile' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/profile/profile.module',
        'basename' => 'profile.module',
        'name' => 'profile',
        'info' => 
        array (
          'name' => 'Profile',
          'description' => 'Supports configurable user profiles.',
          'package' => 'Core',
          'version' => '7.28',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'profile.test',
          ),
          'configure' => 'admin/config/people/profile',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'overlay' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/overlay/overlay.module',
        'basename' => 'overlay.module',
        'name' => 'overlay',
        'info' => 
        array (
          'name' => 'Overlay',
          'description' => 'Displays the Drupal administration interface in an overlay.',
          'package' => 'Core',
          'version' => '7.28',
          'core' => '7.x',
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'poll' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/poll/poll.module',
        'basename' => 'poll.module',
        'name' => 'poll',
        'info' => 
        array (
          'name' => 'Poll',
          'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
          'package' => 'Core',
          'version' => '7.28',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'poll.test',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'poll.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'file_module_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/file/tests/file_module_test.module',
        'basename' => 'file_module_test.module',
        'name' => 'file_module_test',
        'info' => 
        array (
          'name' => 'File test',
          'description' => 'Provides hooks for testing File module functionality.',
          'package' => 'Core',
          'version' => '7.28',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'file' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/file/file.module',
        'basename' => 'file.module',
        'name' => 'file',
        'info' => 
        array (
          'name' => 'File',
          'description' => 'Defines a file field type.',
          'package' => 'Core',
          'version' => '7.28',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'tests/file.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'dblog' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/dblog/dblog.module',
        'basename' => 'dblog.module',
        'name' => 'dblog',
        'info' => 
        array (
          'name' => 'Database logging',
          'description' => 'Logs and records system events to the database.',
          'package' => 'Core',
          'version' => '7.28',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'dblog.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'bbb_update_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/update/tests/bbb_update_test.module',
        'basename' => 'bbb_update_test.module',
        'name' => 'bbb_update_test',
        'info' => 
        array (
          'name' => 'BBB Update test',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.28',
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'aaa_update_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/update/tests/aaa_update_test.module',
        'basename' => 'aaa_update_test.module',
        'name' => 'aaa_update_test',
        'info' => 
        array (
          'name' => 'AAA Update test',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.28',
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'ccc_update_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/update/tests/ccc_update_test.module',
        'basename' => 'ccc_update_test.module',
        'name' => 'ccc_update_test',
        'info' => 
        array (
          'name' => 'CCC Update test',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.28',
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'update_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/update/tests/update_test.module',
        'basename' => 'update_test.module',
        'name' => 'update_test',
        'info' => 
        array (
          'name' => 'Update test',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'version' => '7.28',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'update' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/update/update.module',
        'basename' => 'update.module',
        'name' => 'update',
        'info' => 
        array (
          'name' => 'Update manager',
          'description' => 'Checks for available updates, and can securely install or update modules and themes via a web interface.',
          'version' => '7.28',
          'package' => 'Core',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'update.test',
          ),
          'configure' => 'admin/reports/updates/settings',
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'tracker' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/tracker/tracker.module',
        'basename' => 'tracker.module',
        'name' => 'tracker',
        'info' => 
        array (
          'name' => 'Tracker',
          'description' => 'Enables tracking of recent content for users.',
          'dependencies' => 
          array (
            0 => 'comment',
          ),
          'package' => 'Core',
          'version' => '7.28',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tracker.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'comment' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/comment/comment.module',
        'basename' => 'comment.module',
        'name' => 'comment',
        'info' => 
        array (
          'name' => 'Comment',
          'description' => 'Allows users to comment on and discuss published content.',
          'package' => 'Core',
          'version' => '7.28',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'text',
          ),
          'files' => 
          array (
            0 => 'comment.module',
            1 => 'comment.test',
          ),
          'configure' => 'admin/content/comment',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'comment.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'php' => '5.2.4',
        ),
        'schema_version' => '7009',
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'cron_queue_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/system/tests/cron_queue_test.module',
        'basename' => 'cron_queue_test.module',
        'name' => 'cron_queue_test',
        'info' => 
        array (
          'name' => 'Cron Queue test',
          'description' => 'Support module for the cron queue runner.',
          'package' => 'Testing',
          'version' => '7.28',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'system' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/system/system.module',
        'basename' => 'system.module',
        'name' => 'system',
        'info' => 
        array (
          'name' => 'System',
          'description' => 'Handles general site configuration for administrators.',
          'package' => 'Core',
          'version' => '7.28',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'system.archiver.inc',
            1 => 'system.mail.inc',
            2 => 'system.queue.inc',
            3 => 'system.tar.inc',
            4 => 'system.updater.inc',
            5 => 'system.test',
          ),
          'required' => true,
          'configure' => 'admin/config/system',
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7079',
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'menu' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/menu/menu.module',
        'basename' => 'menu.module',
        'name' => 'menu',
        'info' => 
        array (
          'name' => 'Menu',
          'description' => 'Allows administrators to customize the site navigation menu.',
          'package' => 'Core',
          'version' => '7.28',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'menu.test',
          ),
          'configure' => 'admin/structure/menu',
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'path' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/path/path.module',
        'basename' => 'path.module',
        'name' => 'path',
        'info' => 
        array (
          'name' => 'Path',
          'description' => 'Allows users to rename URLs.',
          'package' => 'Core',
          'version' => '7.28',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'path.test',
          ),
          'configure' => 'admin/config/search/path',
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'fpa' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/fpa/fpa.module',
        'basename' => 'fpa.module',
        'name' => 'fpa',
        'info' => 
        array (
          'name' => 'Fast Permissions Administration',
          'description' => 'Fast filtering on permissions administration form.',
          'core' => '7.x',
          'package' => 'Administration',
          'version' => '7.x-2.5',
          'project' => 'fpa',
          'datestamp' => '1398371034',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'fpa',
        'version' => '7.x-2.5',
      ),
      'esi_context' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/esi/modules/esi_context/esi_context.module',
        'basename' => 'esi_context.module',
        'name' => 'esi_context',
        'info' => 
        array (
          'name' => 'ESI - Context integration',
          'description' => 'Deliver context-controlled blocks via ESI.',
          'core' => '7.x',
          'package' => 'Caching',
          'dependencies' => 
          array (
            0 => 'context',
            1 => 'esi',
            2 => 'esi_block',
          ),
          'version' => '7.x-3.0-alpha1+16-dev',
          'project' => 'esi',
          'datestamp' => '1380577290',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'esi',
        'version' => '7.x-3.0-alpha1+16-dev',
      ),
      'esi_panels' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/esi/modules/esi_panels/esi_panels.module',
        'basename' => 'esi_panels.module',
        'name' => 'esi_panels',
        'info' => 
        array (
          'name' => 'ESI - Panels',
          'description' => 'Deliver panel-panes via ESI.',
          'core' => '7.x',
          'package' => 'Caching',
          'dependencies' => 
          array (
            0 => 'panels',
            1 => 'page_manager',
            2 => 'esi',
          ),
          'version' => '7.x-3.0-alpha1+16-dev',
          'project' => 'esi',
          'datestamp' => '1380577290',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'esi',
        'version' => '7.x-3.0-alpha1+16-dev',
      ),
      'esi_block_test' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/esi/modules/esi_block/tests/esi_block_test.module',
        'basename' => 'esi_block_test.module',
        'name' => 'esi_block_test',
        'info' => 
        array (
          'name' => 'ESI Block test',
          'description' => 'Provides test blocks to use when testing the ESI Block module.',
          'package' => 'Testing',
          'version' => '7.x-3.0-alpha1+16-dev',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'esi',
          'datestamp' => '1380577290',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'esi',
        'version' => '7.x-3.0-alpha1+16-dev',
      ),
      'esi_block' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/esi/modules/esi_block/esi_block.module',
        'basename' => 'esi_block.module',
        'name' => 'esi_block',
        'info' => 
        array (
          'name' => 'ESI - Block',
          'description' => 'Deliver Drupal blocks via ESI.',
          'core' => '7.x',
          'package' => 'Caching',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'esi',
          ),
          'files' => 
          array (
            0 => 'esi_block.test',
          ),
          'version' => '7.x-3.0-alpha1+16-dev',
          'project' => 'esi',
          'datestamp' => '1380577290',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'esi',
        'version' => '7.x-3.0-alpha1+16-dev',
      ),
      'esi' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/esi/esi.module',
        'basename' => 'esi.module',
        'name' => 'esi',
        'info' => 
        array (
          'name' => 'ESI - Edge Side Includes',
          'description' => 'Allow Drupal components to be delivered via ESI (Edge-Side Includes).  Requires an ESI-capable proxy.',
          'package' => 'Caching',
          'recommends' => 
          array (
            0 => 'varnish',
          ),
          'core' => '7.x',
          'version' => '7.x-3.0-alpha1+16-dev',
          'project' => 'esi',
          'datestamp' => '1380577290',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'esi',
        'version' => '7.x-3.0-alpha1+16-dev',
      ),
      'session_expire' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/session_expire/session_expire.module',
        'basename' => 'session_expire.module',
        'name' => 'session_expire',
        'info' => 
        array (
          'name' => 'Session Expire',
          'description' => 'Expires rows from the session table older than a certain time.',
          'core' => '7.x',
          'configure' => 'admin/config/system/session_expire',
          'files' => 
          array (
            0 => 'session_expire.module',
          ),
          'dependencies' => 
          array (
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'flood_control' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/flood_control/flood_control.module',
        'basename' => 'flood_control.module',
        'name' => 'flood_control',
        'info' => 
        array (
          'name' => 'Flood control',
          'description' => 'Interface for hidden flood control options.',
          'core' => '7.x',
          'configure' => 'admin/config/system/flood-control',
          'version' => '7.x-1.x-dev',
          'project' => 'flood_control',
          'datestamp' => '1380579747',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'flood_control',
        'version' => '7.x-1.x-dev',
      ),
      'robotstxt' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/robotstxt/robotstxt.module',
        'basename' => 'robotstxt.module',
        'name' => 'robotstxt',
        'info' => 
        array (
          'name' => 'robots.txt',
          'description' => 'Generates the robots.txt file dynamically and gives you the chance to edit it, on a per-site basis, from the web UI.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'robotstxt.module',
            1 => 'robotstxt.admin.inc',
            2 => 'robotstxt.install',
          ),
          'configure' => 'admin/config/search/robotstxt',
          'version' => '7.x-1.2',
          'project' => 'robotstxt',
          'datestamp' => '1402738728',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7103',
        'project' => 'robotstxt',
        'version' => '7.x-1.2',
      ),
      'textile' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/textile/textile.module',
        'basename' => 'textile.module',
        'name' => 'textile',
        'info' => 
        array (
          'name' => 'Textile',
          'description' => 'Allows content to be submitted using Textile, a simple, plain text syntax that is filtered into valid XHTML.',
          'package' => 'Input filters',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'vars (> 1.0)',
          ),
          'version' => '7.x-2.0-rc11',
          'project' => 'textile',
          'datestamp' => '1319231138',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'textile',
        'version' => '7.x-2.0-rc11',
      ),
      'httprl' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/httprl/httprl.module',
        'basename' => 'httprl.module',
        'name' => 'httprl',
        'info' => 
        array (
          'name' => 'HTTP Parallel Request Library',
          'description' => 'Send http requests out in parallel in a blocking or non-blocking manner.',
          'package' => 'Performance and scalability',
          'core' => '7.x',
          'version' => '7.x-1.14',
          'project' => 'httprl',
          'datestamp' => '1388542110',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'httprl',
        'version' => '7.x-1.14',
      ),
      'securesite' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/securesite/securesite.module',
        'basename' => 'securesite.module',
        'name' => 'securesite',
        'info' => 
        array (
          'name' => 'Secure Site',
          'description' => 'Enables HTTP Auth security or an HTML form to restrict site access.',
          'core' => '7.x',
          'configure' => 'admin/config/system/securesite',
          'files' => 
          array (
            0 => 'securesite.test',
            1 => 'securesite.inc',
          ),
          'version' => '7.x-2.0-beta2+4-dev',
          'project' => 'securesite',
          'datestamp' => '1396946353',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6200',
        'project' => 'securesite',
        'version' => '7.x-2.0-beta2+4-dev',
      ),
      'force_password_change' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/force_password_change/force_password_change.module',
        'basename' => 'force_password_change.module',
        'name' => 'force_password_change',
        'info' => 
        array (
          'name' => 'Force Password Change',
          'description' => 'Allows administrators to force users to change their password',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'force_password_change.install',
            1 => 'force_password_change.module',
            2 => 'force_password_change.pages.inc',
          ),
          'version' => '7.x-1.0-rc2',
          'project' => 'force_password_change',
          'datestamp' => '1296546103',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'force_password_change',
        'version' => '7.x-1.0-rc2',
      ),
      'views_content_cache' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/views_content_cache/views_content_cache.module',
        'basename' => 'views_content_cache.module',
        'name' => 'views_content_cache',
        'info' => 
        array (
          'name' => 'Views Content Cache',
          'description' => 'Provides a views cache plugin based on content type changes.',
          'package' => 'Views',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'plugins/views_content_cache/base.inc',
            1 => 'plugins/views_content_cache/comment.inc',
            2 => 'plugins/views_content_cache/node.inc',
            3 => 'plugins/views_content_cache/node_only.inc',
            4 => 'plugins/views_content_cache/og.inc',
            5 => 'plugins/views_content_cache/votingapi.inc',
            6 => 'views/views_content_cache_plugin_cache.inc',
            7 => 'tests/views_content_cache.test',
          ),
          'version' => '7.x-3.0-alpha3',
          'project' => 'views_content_cache',
          'datestamp' => '1383658110',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_content_cache',
        'version' => '7.x-3.0-alpha3',
      ),
      'reroute_email_test' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/reroute_email/tests/reroute_email_test.module',
        'basename' => 'reroute_email_test.module',
        'name' => 'reroute_email_test',
        'info' => 
        array (
          'name' => 'Reroute Email Test',
          'description' => 'Helper module for the reroute email tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'hidden' => true,
          'version' => '7.x-1.1+28-dev',
          'project' => 'reroute_email',
          'datestamp' => '1382643190',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'reroute_email',
        'version' => '7.x-1.1+28-dev',
      ),
      'reroute_email' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/reroute_email/reroute_email.module',
        'basename' => 'reroute_email.module',
        'name' => 'reroute_email',
        'info' => 
        array (
          'name' => 'Reroute emails',
          'description' => 'Reroutes emails send from the site to a predefined email. Useful for test sites.',
          'package' => 'Development',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'reroute_email.test',
          ),
          'configure' => 'admin/config/development/reroute_email',
          'version' => '7.x-1.1+28-dev',
          'project' => 'reroute_email',
          'datestamp' => '1382643190',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'reroute_email',
        'version' => '7.x-1.1+28-dev',
      ),
      'admin' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/admin/admin.module',
        'basename' => 'admin.module',
        'name' => 'admin',
        'info' => 
        array (
          'name' => 'Admin',
          'description' => 'UI helpers for Drupal admins and managers.',
          'package' => 'Administration',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'admin.admin.inc',
            1 => 'admin.install',
            2 => 'admin.module',
            3 => 'includes/admin.devel.inc',
            4 => 'includes/admin.theme.inc',
            5 => 'theme/admin-panes.tpl.php',
            6 => 'theme/admin-toolbar.tpl.php',
            7 => 'theme/theme.inc',
          ),
          'version' => '7.x-2.0-beta3',
          'project' => 'admin',
          'datestamp' => '1292541646',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'admin',
        'version' => '7.x-2.0-beta3',
      ),
      'variable_clean' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/variable_clean/variable_clean.module',
        'basename' => 'variable_clean.module',
        'name' => 'variable_clean',
        'info' => 
        array (
          'name' => 'Variable Cleanup',
          'description' => 'Allows you to remove variables not currently used.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'variable_clean.module',
            1 => 'variable_clean.test',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'variable_clean',
          'datestamp' => '1382151358',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'variable_clean',
        'version' => '7.x-1.x-dev',
      ),
      'print_ui' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/print/print_ui/print_ui.module',
        'basename' => 'print_ui.module',
        'name' => 'print_ui',
        'info' => 
        array (
          'name' => 'Printer-friendly pages UI',
          'description' => 'Manages the printer-friendly versions link display conditions. Without this module, those links are not displayed.',
          'core' => '7.x',
          'package' => 'Printer, email and PDF versions',
          'dependencies' => 
          array (
            0 => 'print',
          ),
          'configure' => 'admin/config/user-interface/print/ui',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'print_pdf_wkhtmltopdf' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/print/print_pdf/lib_handlers/print_pdf_wkhtmltopdf/print_pdf_wkhtmltopdf.module',
        'basename' => 'print_pdf_wkhtmltopdf.module',
        'name' => 'print_pdf_wkhtmltopdf',
        'info' => 
        array (
          'name' => 'wkhtmltopdf library handler',
          'description' => 'PDF generation library using wkhtmltopdf.',
          'core' => '7.x',
          'package' => 'Printer, email and PDF versions',
          'dependencies' => 
          array (
            0 => 'print_pdf',
          ),
          'configure' => 'admin/config/user-interface/print/pdf/wkhtmltopdf',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'print_pdf_tcpdf' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/print/print_pdf/lib_handlers/print_pdf_tcpdf/print_pdf_tcpdf.module',
        'basename' => 'print_pdf_tcpdf.module',
        'name' => 'print_pdf_tcpdf',
        'info' => 
        array (
          'name' => 'TCPDF library handler',
          'description' => 'PDF generation library using TCPDF.',
          'core' => '7.x',
          'package' => 'Printer, email and PDF versions',
          'dependencies' => 
          array (
            0 => 'print_pdf',
          ),
          'files' => 
          array (
            0 => 'print_pdf_tcpdf.class.inc',
          ),
          'configure' => 'admin/config/user-interface/print/pdf/tcpdf',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'print_pdf_mpdf' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/print/print_pdf/lib_handlers/print_pdf_mpdf/print_pdf_mpdf.module',
        'basename' => 'print_pdf_mpdf.module',
        'name' => 'print_pdf_mpdf',
        'info' => 
        array (
          'name' => 'mPDF library handler',
          'description' => 'PDF generation library using mPDF.',
          'core' => '7.x',
          'package' => 'Printer, email and PDF versions',
          'dependencies' => 
          array (
            0 => 'print_pdf',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'print_pdf_dompdf' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/print/print_pdf/lib_handlers/print_pdf_dompdf/print_pdf_dompdf.module',
        'basename' => 'print_pdf_dompdf.module',
        'name' => 'print_pdf_dompdf',
        'info' => 
        array (
          'name' => 'dompdf library handler',
          'description' => 'PDF generation library using dompdf.',
          'core' => '7.x',
          'package' => 'Printer, email and PDF versions',
          'dependencies' => 
          array (
            0 => 'print_pdf',
          ),
          'configure' => 'admin/config/user-interface/print/pdf/dompdf',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'print_pdf' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/print/print_pdf/print_pdf.module',
        'basename' => 'print_pdf.module',
        'name' => 'print_pdf',
        'info' => 
        array (
          'name' => 'PDF version',
          'description' => 'Adds the capability to export pages as PDF. Requires a PDF library and the respective handler module.',
          'core' => '7.x',
          'package' => 'Printer, email and PDF versions',
          'dependencies' => 
          array (
            0 => 'print',
          ),
          'configure' => 'admin/config/user-interface/print/pdf',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => '7205',
        'project' => '',
        'version' => NULL,
      ),
      'print_epub_phpepub' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/print/print_epub/lib_handlers/print_epub_phpepub/print_epub_phpepub.module',
        'basename' => 'print_epub_phpepub.module',
        'name' => 'print_epub_phpepub',
        'info' => 
        array (
          'name' => 'PHPePub library handler',
          'description' => 'EPUB generation library using PHPePub.',
          'core' => '7.x',
          'package' => 'Printer, email and PDF versions',
          'dependencies' => 
          array (
            0 => 'print_epub',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'print_epub' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/print/print_epub/print_epub.module',
        'basename' => 'print_epub.module',
        'name' => 'print_epub',
        'info' => 
        array (
          'name' => 'EPUB version',
          'description' => 'Adds the capability to export pages as EPUB. Requires an EPUB library and the respective handler module.',
          'core' => '7.x',
          'package' => 'Printer, email and PDF versions',
          'dependencies' => 
          array (
            0 => 'print',
          ),
          'configure' => 'admin/config/user-interface/print/epub',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => '7203',
        'project' => '',
        'version' => NULL,
      ),
      'print_mail' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/print/print_mail/print_mail.module',
        'basename' => 'print_mail.module',
        'name' => 'print_mail',
        'info' => 
        array (
          'name' => 'Send by email',
          'description' => 'Provides the capability to send the web page by email',
          'core' => '7.x',
          'package' => 'Printer, email and PDF versions',
          'dependencies' => 
          array (
            0 => 'print',
          ),
          'configure' => 'admin/config/user-interface/print/email',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => '7203',
        'project' => '',
        'version' => NULL,
      ),
      'print' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/print/print.module',
        'basename' => 'print.module',
        'name' => 'print',
        'info' => 
        array (
          'name' => 'Printer-friendly pages',
          'description' => 'Generates a printer-friendly version of Drupal pages.',
          'core' => '7.x',
          'package' => 'Printer, email and PDF versions',
          'files' => 
          array (
            0 => 'print_join_page_counter.inc',
          ),
          'dependencies' => 
          array (
            0 => 'node',
          ),
          'configure' => 'admin/config/user-interface/print',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => '7203',
        'project' => '',
        'version' => NULL,
      ),
      'entitycache' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/entitycache/entitycache.module',
        'basename' => 'entitycache.module',
        'name' => 'entitycache',
        'info' => 
        array (
          'name' => 'Entity cache',
          'description' => 'Provides caching for core entities including nodes and taxonomy terms.',
          'core' => '7.x',
          'package' => 'Performance and scalability',
          'files' => 
          array (
            0 => 'entitycache.module',
            1 => 'entitycache.comment.inc',
            2 => 'entitycache.taxonomy.inc',
            3 => 'entitycache.test',
          ),
          'version' => '7.x-1.2',
          'project' => 'entitycache',
          'datestamp' => '1383216926',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'entitycache',
        'version' => '7.x-1.2',
      ),
      'views404' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/views404/views404.module',
        'basename' => 'views404.module',
        'name' => 'views404',
        'info' => 
        array (
          'name' => 'Views 404',
          'description' => 'Return 404 if the path doesn\'t match the view path.',
          'package' => 'Views',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'views404',
          'datestamp' => '1382152094',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views404',
        'version' => '7.x-1.x-dev',
      ),
      'filefield_nginx_progress' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/filefield_nginx_progress/filefield_nginx_progress.module',
        'basename' => 'filefield_nginx_progress.module',
        'name' => 'filefield_nginx_progress',
        'info' => 
        array (
          'name' => 'FileField Nginx Progress',
          'description' => 'Adds upload progress functionality for Nginx',
          'files' => 
          array (
            0 => 'filefield_nginx_progress.install',
            1 => 'filefield_nginx_progress.module',
          ),
          'dependencies' => 
          array (
            0 => 'file',
          ),
          'package' => 'Fields',
          'core' => '7.x',
          'php' => '5.2',
          'version' => '7.x-2.3+1-dev',
          'project' => 'filefield_nginx_progress',
          'datestamp' => '1380579093',
        ),
        'schema_version' => '7100',
        'project' => 'filefield_nginx_progress',
        'version' => '7.x-2.3+1-dev',
      ),
      'views_taxonomy_edge' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/taxonomy_edge/views_taxonomy_edge/views_taxonomy_edge.module',
        'basename' => 'views_taxonomy_edge.module',
        'name' => 'views_taxonomy_edge',
        'info' => 
        array (
          'name' => 'Views Taxonomy Edge',
          'description' => 'Views for taxonomies using Taxonomy Edge',
          'package' => 'Views',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'taxonomy_edge',
            1 => 'views',
          ),
          'files' => 
          array (
            0 => 'handlers/views_handler_argument_term_edge_node_tid_depth.inc',
            1 => 'handlers/views_handler_argument_term_edge_node_tid_depth_modifier.inc',
            2 => 'handlers/views_handler_filter_term_edge_node_tid_depth.inc',
            3 => 'handlers/views_join_term_edge.inc',
            4 => 'handlers/views_handler_sort_term_edge_hierarchy.inc',
          ),
          'version' => '7.x-1.8+12-dev',
          'project' => 'taxonomy_edge',
          'datestamp' => '1394207662',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'taxonomy_edge',
        'version' => '7.x-1.8+12-dev',
      ),
      'taxonomy_edge' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/taxonomy_edge/taxonomy_edge.module',
        'basename' => 'taxonomy_edge.module',
        'name' => 'taxonomy_edge',
        'info' => 
        array (
          'name' => 'Taxonomy Edge',
          'description' => 'Edge lists for taxonomies',
          'package' => 'Taxonomy',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'taxonomy',
          ),
          'configure' => 'admin/structure/taxonomy/edge',
          'files' => 
          array (
            0 => 'tests/tree.test',
            1 => 'tests/unit.test',
          ),
          'version' => '7.x-1.8+12-dev',
          'project' => 'taxonomy_edge',
          'datestamp' => '1394207662',
          'php' => '5.2.4',
        ),
        'schema_version' => '7102',
        'project' => 'taxonomy_edge',
        'version' => '7.x-1.8+12-dev',
      ),
      'css_emimage' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/css_emimage/css_emimage.module',
        'basename' => 'css_emimage.module',
        'name' => 'css_emimage',
        'info' => 
        array (
          'name' => 'CSS Embedded Images',
          'description' => 'Replaces image URLs in CSS files with embedded images when CSS optimization is enabled.',
          'core' => '7.x',
          'package' => 'Performance and scalability',
          'configure' => 'admin/config/development/performance',
          'version' => '7.x-1.3+3-dev',
          'project' => 'css_emimage',
          'datestamp' => '1380568223',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'css_emimage',
        'version' => '7.x-1.3+3-dev',
      ),
      'vars_extended_test' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/vars/tests/vars_extended_test.module',
        'basename' => 'vars_extended_test.module',
        'name' => 'vars_extended_test',
        'info' => 
        array (
          'name' => 'Variable API extended test module',
          'description' => 'Module for testing the Variables API module with SimpleTest; do not enable it.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'vars',
          ),
          'files' => 
          array (
            0 => 'vars_extended_test.install',
            1 => 'vars_extended_test.module',
          ),
          'hidden' => true,
          'version' => '7.x-2.0-alpha10',
          'project' => 'vars',
          'datestamp' => '1318969538',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'vars',
        'version' => '7.x-2.0-alpha10',
      ),
      'vars_test' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/vars/tests/vars_test.module',
        'basename' => 'vars_test.module',
        'name' => 'vars_test',
        'info' => 
        array (
          'name' => 'Variable API test module',
          'description' => 'Module for testing the Variable API module with SimpleTest; do not enable it.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'vars',
          ),
          'files' => 
          array (
            0 => 'vars_test.install',
            1 => 'vars_test.module',
          ),
          'hidden' => true,
          'version' => '7.x-2.0-alpha10',
          'project' => 'vars',
          'datestamp' => '1318969538',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'vars',
        'version' => '7.x-2.0-alpha10',
      ),
      'vars' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/vars/vars.module',
        'basename' => 'vars.module',
        'name' => 'vars',
        'info' => 
        array (
          'name' => 'Variable API',
          'description' => 'Implements an API to handle persistent variables.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'vars.classes.inc',
            1 => 'tests/vars.test',
          ),
          'version' => '7.x-2.0-alpha10',
          'project' => 'vars',
          'datestamp' => '1318969538',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7204',
        'project' => 'vars',
        'version' => '7.x-2.0-alpha10',
      ),
      'advagg_css_cdn' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/advagg/advagg_css_cdn/advagg_css_cdn.module',
        'basename' => 'advagg_css_cdn.module',
        'name' => 'advagg_css_cdn',
        'info' => 
        array (
          'name' => 'AdvAgg CDN CSS',
          'description' => 'Use a shared CDN for CSS libraries, Google Libraries API currently.',
          'package' => 'Advanced CSS/JS Aggregation',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'advagg',
          ),
          'version' => '7.x-2.7',
          'project' => 'advagg',
          'datestamp' => '1402608232',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'advagg',
        'version' => '7.x-2.7',
      ),
      'advagg_css_compress' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/advagg/advagg_css_compress/advagg_css_compress.module',
        'basename' => 'advagg_css_compress.module',
        'name' => 'advagg_css_compress',
        'info' => 
        array (
          'name' => 'AdvAgg Compress CSS',
          'description' => 'Compress CSS with a 3rd party compressor, YUI currently.',
          'package' => 'Advanced CSS/JS Aggregation',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'advagg',
          ),
          'configure' => 'admin/config/development/performance/advagg/css-compress',
          'version' => '7.x-2.7',
          'project' => 'advagg',
          'datestamp' => '1402608232',
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'project' => 'advagg',
        'version' => '7.x-2.7',
      ),
      'advagg_js_cdn' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/advagg/advagg_js_cdn/advagg_js_cdn.module',
        'basename' => 'advagg_js_cdn.module',
        'name' => 'advagg_js_cdn',
        'info' => 
        array (
          'name' => 'AdvAgg CDN Javascript',
          'description' => 'Use a shared CDN for javascript libraries, Google Libraries API currently.',
          'package' => 'Advanced CSS/JS Aggregation',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'advagg',
          ),
          'version' => '7.x-2.7',
          'project' => 'advagg',
          'datestamp' => '1402608232',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'advagg',
        'version' => '7.x-2.7',
      ),
      'advagg_validator' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/advagg/advagg_validator/advagg_validator.module',
        'basename' => 'advagg_validator.module',
        'name' => 'advagg_validator',
        'info' => 
        array (
          'name' => 'AdvAgg CSS/JS Validator',
          'description' => 'Validate the CSS & JS files used in Aggregation for syntax errors.',
          'package' => 'Advanced CSS/JS Aggregation',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'advagg',
          ),
          'configure' => 'admin/config/development/performance/advagg/validator',
          'version' => '7.x-2.7',
          'project' => 'advagg',
          'datestamp' => '1402608232',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'advagg',
        'version' => '7.x-2.7',
      ),
      'advagg_mod' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/advagg/advagg_mod/advagg_mod.module',
        'basename' => 'advagg_mod.module',
        'name' => 'advagg_mod',
        'info' => 
        array (
          'name' => 'AdvAgg Modifier',
          'description' => 'Allows one to alter the CSS and JS array.',
          'package' => 'Advanced CSS/JS Aggregation',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'advagg',
          ),
          'configure' => 'admin/config/development/performance/advagg/mod',
          'version' => '7.x-2.7',
          'project' => 'advagg',
          'datestamp' => '1402608232',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'advagg',
        'version' => '7.x-2.7',
      ),
      'advagg_js_compress' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/advagg/advagg_js_compress/advagg_js_compress.module',
        'basename' => 'advagg_js_compress.module',
        'name' => 'advagg_js_compress',
        'info' => 
        array (
          'name' => 'AdvAgg Compress Javascript',
          'description' => 'Compress Javascript with a 3rd party compressor, JSMin+ currently.',
          'package' => 'Advanced CSS/JS Aggregation',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'advagg',
          ),
          'configure' => 'admin/config/development/performance/advagg/js-compress',
          'version' => '7.x-2.7',
          'project' => 'advagg',
          'datestamp' => '1402608232',
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'project' => 'advagg',
        'version' => '7.x-2.7',
      ),
      'advagg_bundler' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/advagg/advagg_bundler/advagg_bundler.module',
        'basename' => 'advagg_bundler.module',
        'name' => 'advagg_bundler',
        'info' => 
        array (
          'name' => 'AdvAgg Bundler',
          'description' => 'Provides intelligent bundling of CSS and JS files by grouping files that belong together.',
          'package' => 'Advanced CSS/JS Aggregation',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'advagg',
          ),
          'configure' => 'admin/config/development/performance/advagg/bundler',
          'version' => '7.x-2.7',
          'project' => 'advagg',
          'datestamp' => '1402608232',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'advagg',
        'version' => '7.x-2.7',
      ),
      'advagg' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/advagg/advagg.module',
        'basename' => 'advagg.module',
        'name' => 'advagg',
        'info' => 
        array (
          'name' => 'Advanced CSS/JS Aggregation',
          'description' => 'Aggregates multiple CSS/JS files in a way that prevents 404 from happening when accessing a CSS or JS file.',
          'package' => 'Advanced CSS/JS Aggregation',
          'core' => '7.x',
          'configure' => 'admin/config/development/performance/advagg',
          'version' => '7.x-2.7',
          'project' => 'advagg',
          'datestamp' => '1402608232',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7205',
        'project' => 'advagg',
        'version' => '7.x-2.7',
      ),
      'js_test' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/js/tests/js_test.module',
        'basename' => 'js_test.module',
        'name' => 'js_test',
        'info' => 
        array (
          'name' => 'JavaScript callback handler tests',
          'description' => 'Tests for the JS module.',
          'package' => 'Performance',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'js_test.test',
          ),
          'version' => '7.x-1.0+5-dev',
          'project' => 'js',
          'datestamp' => '1394174606',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'js',
        'version' => '7.x-1.0+5-dev',
      ),
      'js' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/js/js.module',
        'basename' => 'js.module',
        'name' => 'js',
        'info' => 
        array (
          'name' => 'JavaScript callback handler',
          'description' => 'A high-performance JavaScript callback handler for 3rd party modules.',
          'package' => 'Performance',
          'core' => '7.x',
          'configure' => 'admin/config/system/js',
          'version' => '7.x-1.0+5-dev',
          'project' => 'js',
          'datestamp' => '1394174606',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'js',
        'version' => '7.x-1.0+5-dev',
      ),
      'config_perms' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/config_perms/config_perms.module',
        'basename' => 'config_perms.module',
        'name' => 'config_perms',
        'info' => 
        array (
          'name' => 'Custom Permissions',
          'description' => 'Allows additional permissions to be created and managed through a administration form.',
          'core' => '7.x',
          'package' => 'Permissions',
          'files' => 
          array (
            0 => 'config_perms.admin.inc',
            1 => 'config_perms.install',
            2 => 'config_perms.module',
          ),
          'version' => '7.x-2.0+4-dev',
          'project' => 'config_perms',
          'datestamp' => '1380566688',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6200',
        'project' => 'config_perms',
        'version' => '7.x-2.0+4-dev',
      ),
      'login_security' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/login_security/login_security.module',
        'basename' => 'login_security.module',
        'name' => 'login_security',
        'info' => 
        array (
          'name' => 'Login Security',
          'description' => 'Enable security options in the login flow of the site.',
          'files' => 
          array (
            0 => 'login_security.test',
          ),
          'core' => '7.x',
          'configure' => 'admin/config/people/login_security',
          'version' => '7.x-1.9',
          'project' => 'login_security',
          'datestamp' => '1392987818',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'login_security',
        'version' => '7.x-1.9',
      ),
      'views_accelerator' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/views_accelerator/views_accelerator.module',
        'basename' => 'views_accelerator.module',
        'name' => 'views_accelerator',
        'info' => 
        array (
          'name' => 'Views Accelerator',
          'description' => 'Performance boost for views that are receptive to render optimisations.',
          'core' => '7.x',
          'configure' => 'admin/config/system/views-accelerator',
          'package' => 'Views',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'files' => 
          array (
            0 => 'views/plugins/views_plugin_cache_none_accelerated.inc',
            1 => 'views/plugins/views_plugin_cache_none_debug.inc',
          ),
          'version' => '7.x-1.0-alpha2',
          'project' => 'views_accelerator',
          'datestamp' => '1404551329',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_accelerator',
        'version' => '7.x-1.0-alpha2',
      ),
      'purge' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/purge/purge.module',
        'basename' => 'purge.module',
        'name' => 'purge',
        'info' => 
        array (
          'name' => 'Purge',
          'description' => 'Purge clears urls from reverse proxy caches like Varnish and Squid by issuing HTTP PURGE requests.',
          'package' => 'Performance and scalability',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'expire',
          ),
          'files ' => 
          array (
            0 => 'purge.module',
            1 => 'purge.inc',
          ),
          'configure' => 'admin/config/development/performance/purge',
          'version' => '7.x-1.6',
          'project' => 'purge',
          'datestamp' => '1358998406',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'purge',
        'version' => '7.x-1.6',
      ),
      'readonlymode' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/readonlymode/readonlymode.module',
        'basename' => 'readonlymode.module',
        'name' => 'readonlymode',
        'info' => 
        array (
          'name' => 'Read Only Mode',
          'description' => 'This module will lock your site for any form postings.',
          'core' => '7.x',
          'package' => 'Administration',
          'configure' => 'admin/config/development/maintenance',
          'files' => 
          array (
            0 => 'readonlymode.test',
          ),
          'version' => '7.x-1.2',
          'project' => 'readonlymode',
          'datestamp' => '1402574630',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'readonlymode',
        'version' => '7.x-1.2',
      ),
      'boost_crawler' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/boost/boost_crawler/boost_crawler.module',
        'basename' => 'boost_crawler.module',
        'name' => 'boost_crawler',
        'info' => 
        array (
          'name' => 'Boost Crawler',
          'description' => 'Minimal crawler to regenerate the cache as pages are expired.',
          'package' => 'Performance and scalability',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'boost_crawler.module',
          ),
          'recommends' => 
          array (
            0 => 'boost',
          ),
          'dependencies' => 
          array (
            0 => 'httprl',
            1 => 'expire',
          ),
          'configure' => 'admin/config/system/boost/crawler',
          'version' => '7.x-1.0',
          'project' => 'boost',
          'datestamp' => '1399056528',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'boost',
        'version' => '7.x-1.0',
      ),
      'boost' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/boost/boost.module',
        'basename' => 'boost.module',
        'name' => 'boost',
        'info' => 
        array (
          'name' => 'Boost',
          'description' => 'Caches generated output as a static file to be served directly from the webserver.',
          'package' => 'Performance and scalability',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'boost.module',
            1 => 'boost.admin.inc',
            2 => 'boost.blocks.inc',
          ),
          'recommends' => 
          array (
            0 => 'expire',
          ),
          'configure' => 'admin/config/system/boost',
          'version' => '7.x-1.0',
          'project' => 'boost',
          'datestamp' => '1399056528',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'boost',
        'version' => '7.x-1.0',
      ),
      'views_cache_bully' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/views_cache_bully/views_cache_bully.module',
        'basename' => 'views_cache_bully.module',
        'name' => 'views_cache_bully',
        'info' => 
        array (
          'name' => 'Views Cache Bully',
          'description' => 'Forcibily cache all views, come hell or high water.',
          'core' => '7.x',
          'package' => 'views',
          'files' => 
          array (
            0 => 'views_cache_bully.views.inc',
          ),
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'version' => '7.x-3.1',
          'project' => 'views_cache_bully',
          'datestamp' => '1389886710',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_cache_bully',
        'version' => '7.x-3.1',
      ),
      'redis' => 
      array (
        'filename' => '/data/all/000/modules/redis/redis.module',
        'basename' => 'redis.module',
        'name' => 'redis',
        'info' => 
        array (
          'dependencies' => 
          array (
          ),
          'description' => '',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'speedy' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/speedy/speedy.module',
        'basename' => 'speedy.module',
        'name' => 'speedy',
        'info' => 
        array (
          'name' => 'Speedy',
          'description' => 'Tools to improve the front end performance of your site.',
          'core' => '7.x',
          'configure' => 'admin/config/development/performance',
          'version' => '7.x-1.12',
          'project' => 'speedy',
          'datestamp' => '1407423547',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'speedy',
        'version' => '7.x-1.12',
      ),
      'blockcache_alter' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/blockcache_alter/blockcache_alter.module',
        'basename' => 'blockcache_alter.module',
        'name' => 'blockcache_alter',
        'info' => 
        array (
          'name' => 'Block Cache Alter',
          'description' => 'Alter the cache settings per block.',
          'core' => '7.x',
          'package' => 'Performance and scalability',
          'version' => '7.x-1.0+4-dev',
          'project' => 'blockcache_alter',
          'datestamp' => '1380556229',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'blockcache_alter',
        'version' => '7.x-1.0+4-dev',
      ),
      'site_verify' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/site_verify/site_verify.module',
        'basename' => 'site_verify.module',
        'name' => 'site_verify',
        'info' => 
        array (
          'name' => 'Site Verification',
          'description' => 'Verifies ownership of a site for use with search engines.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'site_verify.module',
            1 => 'site_verify.admin.inc',
            2 => 'site_verify.install',
            3 => 'site_verify.test',
          ),
          'configure' => 'admin/config/search/verifications',
          'version' => '7.x-1.1',
          'project' => 'site_verify',
          'datestamp' => '1395656959',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '3',
        'project' => 'site_verify',
        'version' => '7.x-1.1',
      ),
      'panels_content_cache' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/panels_content_cache/panels_content_cache.module',
        'basename' => 'panels_content_cache.module',
        'name' => 'panels_content_cache',
        'info' => 
        array (
          'name' => 'Panels Content Cache',
          'core' => '7.x',
          'package' => 'Panels',
          'description' => 'A content based caching plugin for panels. Allows panel caches to be expired based on content creation / updates.',
          'dependencies' => 
          array (
            0 => 'panels',
          ),
          'version' => '7.x-1.0',
          'project' => 'panels_content_cache',
          'datestamp' => '1367328019',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'panels_content_cache',
        'version' => '7.x-1.0',
      ),
      'nocurrent_pass' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/nocurrent_pass/nocurrent_pass.module',
        'basename' => 'nocurrent_pass.module',
        'name' => 'nocurrent_pass',
        'info' => 
        array (
          'name' => 'No Current Password',
          'description' => 'Make the "current password" requirement on the user edit form optional.',
          'package' => 'Other',
          'core' => '7.x',
          'version' => '7.x-1.0',
          'project' => 'nocurrent_pass',
          'datestamp' => '1328692247',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'nocurrent_pass',
        'version' => '7.x-1.0',
      ),
      'cdn' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/cdn/cdn.module',
        'basename' => 'cdn.module',
        'name' => 'cdn',
        'info' => 
        array (
          'name' => 'CDN',
          'description' => 'Integrates your site with a CDN, through altering file URLs.',
          'core' => '7.x',
          'package' => 'Performance and scalability',
          'configure' => 'admin/config/development/cdn',
          'files' => 
          array (
            0 => 'cdn.test',
          ),
          'version' => '7.x-2.6+3-dev',
          'project' => 'cdn',
          'datestamp' => '1392895444',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7210',
        'project' => 'cdn',
        'version' => '7.x-2.6+3-dev',
      ),
      'expire' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/expire/expire.module',
        'basename' => 'expire.module',
        'name' => 'expire',
        'info' => 
        array (
          'name' => 'Cache Expiration',
          'description' => 'Logic for expiring cached pages.',
          'package' => 'Performance and scalability',
          'core' => '7.x',
          'configure' => 'admin/config/system/expire',
          'files' => 
          array (
            0 => 'includes/expire.api.inc',
            1 => 'includes/expire.comment.inc',
            2 => 'includes/expire.domain.inc',
            3 => 'includes/expire.interface.inc',
            4 => 'includes/expire.menu_link.inc',
            5 => 'includes/expire.node.inc',
            6 => 'includes/expire.user.inc',
            7 => 'includes/expire.votingapi.inc',
            8 => 'includes/expire.file.inc',
          ),
          'version' => '7.x-2.0-rc3',
          'project' => 'expire',
          'datestamp' => '1398612528',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'project' => 'expire',
        'version' => '7.x-2.0-rc3',
      ),
      'display_cache' => 
      array (
        'filename' => '/data/all/017/o_contrib_seven/display_cache/display_cache.module',
        'basename' => 'display_cache.module',
        'name' => 'display_cache',
        'info' => 
        array (
          'name' => 'Display Cache',
          'description' => 'Provides views and panels plugins to display rendered entities from cache.',
          'package' => 'Performance',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'entity',
          ),
          'version' => '7.x-1.0',
          'project' => 'display_cache',
          'datestamp' => '1399555728',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'display_cache',
        'version' => '7.x-1.0',
      ),
      'forum' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/forum/forum.module',
        'basename' => 'forum.module',
        'name' => 'forum',
        'info' => 
        array (
          'name' => 'Forum',
          'description' => 'Provides discussion forums.',
          'dependencies' => 
          array (
            0 => 'taxonomy',
            1 => 'comment',
          ),
          'package' => 'Core',
          'version' => '7.28',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'forum.test',
          ),
          'configure' => 'admin/structure/forum',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'forum.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'php' => '5.2.4',
        ),
        'schema_version' => '7012',
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'locale_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/locale/tests/locale_test.module',
        'basename' => 'locale_test.module',
        'name' => 'locale_test',
        'info' => 
        array (
          'name' => 'Locale Test',
          'description' => 'Support module for the locale layer tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.28',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'locale' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/locale/locale.module',
        'basename' => 'locale.module',
        'name' => 'locale',
        'info' => 
        array (
          'name' => 'Locale',
          'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
          'package' => 'Core',
          'version' => '7.28',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'locale.test',
          ),
          'configure' => 'admin/config/regional/language',
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'help' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/help/help.module',
        'basename' => 'help.module',
        'name' => 'help',
        'info' => 
        array (
          'name' => 'Help',
          'description' => 'Manages the display of online help.',
          'package' => 'Core',
          'version' => '7.28',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'help.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'field_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/field/tests/field_test.module',
        'basename' => 'field_test.module',
        'name' => 'field_test',
        'info' => 
        array (
          'name' => 'Field API Test',
          'description' => 'Support module for the Field API tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'files' => 
          array (
            0 => 'field_test.entity.inc',
          ),
          'version' => '7.28',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'text' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/field/modules/text/text.module',
        'basename' => 'text.module',
        'name' => 'text',
        'info' => 
        array (
          'name' => 'Text',
          'description' => 'Defines simple text field types.',
          'package' => 'Core',
          'version' => '7.28',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'text.test',
          ),
          'required' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'options' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/field/modules/options/options.module',
        'basename' => 'options.module',
        'name' => 'options',
        'info' => 
        array (
          'name' => 'Options',
          'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
          'package' => 'Core',
          'version' => '7.28',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'options.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'number' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/field/modules/number/number.module',
        'basename' => 'number.module',
        'name' => 'number',
        'info' => 
        array (
          'name' => 'Number',
          'description' => 'Defines numeric field types.',
          'package' => 'Core',
          'version' => '7.28',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'number.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'field_sql_storage' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/field/modules/field_sql_storage/field_sql_storage.module',
        'basename' => 'field_sql_storage.module',
        'name' => 'field_sql_storage',
        'info' => 
        array (
          'name' => 'Field SQL storage',
          'description' => 'Stores field data in an SQL database.',
          'package' => 'Core',
          'version' => '7.28',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'field_sql_storage.test',
          ),
          'required' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'list_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/field/modules/list/tests/list_test.module',
        'basename' => 'list_test.module',
        'name' => 'list_test',
        'info' => 
        array (
          'name' => 'List test',
          'description' => 'Support module for the List module tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.28',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'list' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/field/modules/list/list.module',
        'basename' => 'list.module',
        'name' => 'list',
        'info' => 
        array (
          'name' => 'List',
          'description' => 'Defines list field types. Use with Options to create selection lists.',
          'package' => 'Core',
          'version' => '7.28',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'options',
          ),
          'files' => 
          array (
            0 => 'tests/list.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'field' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/field/field.module',
        'basename' => 'field.module',
        'name' => 'field',
        'info' => 
        array (
          'name' => 'Field',
          'description' => 'Field API to add fields to entities like nodes and users.',
          'package' => 'Core',
          'version' => '7.28',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'field.module',
            1 => 'field.attach.inc',
            2 => 'field.info.class.inc',
            3 => 'tests/field.test',
          ),
          'dependencies' => 
          array (
            0 => 'field_sql_storage',
          ),
          'required' => true,
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'theme/field.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'book' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/book/book.module',
        'basename' => 'book.module',
        'name' => 'book',
        'info' => 
        array (
          'name' => 'Book',
          'description' => 'Allows users to create and organize related content in an outline.',
          'package' => 'Core',
          'version' => '7.28',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'book.test',
          ),
          'configure' => 'admin/content/book/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'book.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'statistics' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/statistics/statistics.module',
        'basename' => 'statistics.module',
        'name' => 'statistics',
        'info' => 
        array (
          'name' => 'Statistics',
          'description' => 'Logs access statistics for your site.',
          'package' => 'Core',
          'version' => '7.28',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'statistics.test',
          ),
          'configure' => 'admin/config/system/statistics',
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'node_access_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/node/tests/node_access_test.module',
        'basename' => 'node_access_test.module',
        'name' => 'node_access_test',
        'info' => 
        array (
          'name' => 'Node module access tests',
          'description' => 'Support module for node permission testing.',
          'package' => 'Testing',
          'version' => '7.28',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'node_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/node/tests/node_test.module',
        'basename' => 'node_test.module',
        'name' => 'node_test',
        'info' => 
        array (
          'name' => 'Node module tests',
          'description' => 'Support module for node related testing.',
          'package' => 'Testing',
          'version' => '7.28',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'node_test_exception' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/node/tests/node_test_exception.module',
        'basename' => 'node_test_exception.module',
        'name' => 'node_test_exception',
        'info' => 
        array (
          'name' => 'Node module exception tests',
          'description' => 'Support module for node related exception testing.',
          'package' => 'Testing',
          'version' => '7.28',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'node' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/node/node.module',
        'basename' => 'node.module',
        'name' => 'node',
        'info' => 
        array (
          'name' => 'Node',
          'description' => 'Allows content to be submitted to the site and displayed on pages.',
          'package' => 'Core',
          'version' => '7.28',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'node.module',
            1 => 'node.test',
          ),
          'required' => true,
          'configure' => 'admin/structure/types',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'node.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7014',
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'filter' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/filter/filter.module',
        'basename' => 'filter.module',
        'name' => 'filter',
        'info' => 
        array (
          'name' => 'Filter',
          'description' => 'Filters content in preparation for display.',
          'package' => 'Core',
          'version' => '7.28',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'filter.test',
          ),
          'required' => true,
          'configure' => 'admin/config/content/formats',
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7010',
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'block_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/block/tests/block_test.module',
        'basename' => 'block_test.module',
        'name' => 'block_test',
        'info' => 
        array (
          'name' => 'Block test',
          'description' => 'Provides test blocks.',
          'package' => 'Testing',
          'version' => '7.28',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'block' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/block/block.module',
        'basename' => 'block.module',
        'name' => 'block',
        'info' => 
        array (
          'name' => 'Block',
          'description' => 'Controls the visual building blocks a page is constructed with. Blocks are boxes of content rendered into an area, or region, of a web page.',
          'package' => 'Core',
          'version' => '7.28',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'block.test',
          ),
          'configure' => 'admin/structure/block',
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7008',
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'openid_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/openid/tests/openid_test.module',
        'basename' => 'openid_test.module',
        'name' => 'openid_test',
        'info' => 
        array (
          'name' => 'OpenID dummy provider',
          'description' => 'OpenID provider used for testing.',
          'package' => 'Testing',
          'version' => '7.28',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'openid',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'openid' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/openid/openid.module',
        'basename' => 'openid.module',
        'name' => 'openid',
        'info' => 
        array (
          'name' => 'OpenID',
          'description' => 'Allows users to log into your site using OpenID.',
          'version' => '7.28',
          'package' => 'Core',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'openid.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'image_module_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/image/tests/image_module_test.module',
        'basename' => 'image_module_test.module',
        'name' => 'image_module_test',
        'info' => 
        array (
          'name' => 'Image test',
          'description' => 'Provides hook implementations for testing Image module functionality.',
          'package' => 'Core',
          'version' => '7.28',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'image_module_test.module',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'image' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/image/image.module',
        'basename' => 'image.module',
        'name' => 'image',
        'info' => 
        array (
          'name' => 'Image',
          'description' => 'Provides image manipulation tools.',
          'package' => 'Core',
          'version' => '7.28',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'file',
          ),
          'files' => 
          array (
            0 => 'image.test',
          ),
          'configure' => 'admin/config/media/image-styles',
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'search_extra_type' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/search/tests/search_extra_type.module',
        'basename' => 'search_extra_type.module',
        'name' => 'search_extra_type',
        'info' => 
        array (
          'name' => 'Test search type',
          'description' => 'Support module for search module testing.',
          'package' => 'Testing',
          'version' => '7.28',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'search_embedded_form' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/search/tests/search_embedded_form.module',
        'basename' => 'search_embedded_form.module',
        'name' => 'search_embedded_form',
        'info' => 
        array (
          'name' => 'Search embedded form',
          'description' => 'Support module for search module testing of embedded forms.',
          'package' => 'Testing',
          'version' => '7.28',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'search' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/search/search.module',
        'basename' => 'search.module',
        'name' => 'search',
        'info' => 
        array (
          'name' => 'Search',
          'description' => 'Enables site-wide keyword searching.',
          'package' => 'Core',
          'version' => '7.28',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'search.extender.inc',
            1 => 'search.test',
          ),
          'configure' => 'admin/config/search/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'search.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'blog' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/blog/blog.module',
        'basename' => 'blog.module',
        'name' => 'blog',
        'info' => 
        array (
          'name' => 'Blog',
          'description' => 'Enables multi-user blogs.',
          'package' => 'Core',
          'version' => '7.28',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'blog.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'trigger_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/trigger/tests/trigger_test.module',
        'basename' => 'trigger_test.module',
        'name' => 'trigger_test',
        'info' => 
        array (
          'name' => 'Trigger Test',
          'description' => 'Support module for Trigger tests.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.28',
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'trigger' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/trigger/trigger.module',
        'basename' => 'trigger.module',
        'name' => 'trigger',
        'info' => 
        array (
          'name' => 'Trigger',
          'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
          'package' => 'Core',
          'version' => '7.28',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'trigger.test',
          ),
          'configure' => 'admin/structure/trigger',
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'field_ui' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/field_ui/field_ui.module',
        'basename' => 'field_ui.module',
        'name' => 'field_ui',
        'info' => 
        array (
          'name' => 'Field UI',
          'description' => 'User interface for the Field API.',
          'package' => 'Core',
          'version' => '7.28',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'field_ui.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'shortcut' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/shortcut/shortcut.module',
        'basename' => 'shortcut.module',
        'name' => 'shortcut',
        'info' => 
        array (
          'name' => 'Shortcut',
          'description' => 'Allows users to manage customizable lists of shortcut links.',
          'package' => 'Core',
          'version' => '7.28',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'shortcut.test',
          ),
          'configure' => 'admin/config/user-interface/shortcut',
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'toolbar' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/toolbar/toolbar.module',
        'basename' => 'toolbar.module',
        'name' => 'toolbar',
        'info' => 
        array (
          'name' => 'Toolbar',
          'description' => 'Provides a toolbar that shows the top-level administration menu items and links from other modules.',
          'core' => '7.x',
          'package' => 'Core',
          'version' => '7.28',
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'user_form_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/user/tests/user_form_test.module',
        'basename' => 'user_form_test.module',
        'name' => 'user_form_test',
        'info' => 
        array (
          'name' => 'User module form tests',
          'description' => 'Support module for user form testing.',
          'package' => 'Testing',
          'version' => '7.28',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'user' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/user/user.module',
        'basename' => 'user.module',
        'name' => 'user',
        'info' => 
        array (
          'name' => 'User',
          'description' => 'Manages the user registration and login system.',
          'package' => 'Core',
          'version' => '7.28',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'user.module',
            1 => 'user.test',
          ),
          'required' => true,
          'configure' => 'admin/config/people',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'user.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7018',
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'translation_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/translation/tests/translation_test.module',
        'basename' => 'translation_test.module',
        'name' => 'translation_test',
        'info' => 
        array (
          'name' => 'Content Translation Test',
          'description' => 'Support module for the content translation tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.28',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'translation' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/translation/translation.module',
        'basename' => 'translation.module',
        'name' => 'translation',
        'info' => 
        array (
          'name' => 'Content translation',
          'description' => 'Allows content to be translated into different languages.',
          'dependencies' => 
          array (
            0 => 'locale',
          ),
          'package' => 'Core',
          'version' => '7.28',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'translation.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'rdf_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/rdf/tests/rdf_test.module',
        'basename' => 'rdf_test.module',
        'name' => 'rdf_test',
        'info' => 
        array (
          'name' => 'RDF module tests',
          'description' => 'Support module for RDF module testing.',
          'package' => 'Testing',
          'version' => '7.28',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'rdf' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/rdf/rdf.module',
        'basename' => 'rdf.module',
        'name' => 'rdf',
        'info' => 
        array (
          'name' => 'RDF',
          'description' => 'Enriches your content with metadata to let other applications (e.g. search engines, aggregators) better understand its relationships and attributes.',
          'package' => 'Core',
          'version' => '7.28',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rdf.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'aggregator_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/aggregator/tests/aggregator_test.module',
        'basename' => 'aggregator_test.module',
        'name' => 'aggregator_test',
        'info' => 
        array (
          'name' => 'Aggregator module tests',
          'description' => 'Support module for aggregator related testing.',
          'package' => 'Testing',
          'version' => '7.28',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'aggregator' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/aggregator/aggregator.module',
        'basename' => 'aggregator.module',
        'name' => 'aggregator',
        'info' => 
        array (
          'name' => 'Aggregator',
          'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds).',
          'package' => 'Core',
          'version' => '7.28',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'aggregator.test',
          ),
          'configure' => 'admin/config/services/aggregator/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'aggregator.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'contact' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/contact/contact.module',
        'basename' => 'contact.module',
        'name' => 'contact',
        'info' => 
        array (
          'name' => 'Contact',
          'description' => 'Enables the use of both personal and site-wide contact forms.',
          'package' => 'Core',
          'version' => '7.28',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'contact.test',
          ),
          'configure' => 'admin/structure/contact',
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'dashboard' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/dashboard/dashboard.module',
        'basename' => 'dashboard.module',
        'name' => 'dashboard',
        'info' => 
        array (
          'name' => 'Dashboard',
          'description' => 'Provides a dashboard page in the administrative interface for organizing administrative tasks and tracking information within your site.',
          'core' => '7.x',
          'package' => 'Core',
          'version' => '7.28',
          'files' => 
          array (
            0 => 'dashboard.test',
          ),
          'dependencies' => 
          array (
            0 => 'block',
          ),
          'configure' => 'admin/dashboard/customize',
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'php' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/php/php.module',
        'basename' => 'php.module',
        'name' => 'php',
        'info' => 
        array (
          'name' => 'PHP filter',
          'description' => 'Allows embedded PHP code/snippets to be evaluated.',
          'package' => 'Core',
          'version' => '7.28',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'php.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'taxonomy' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/taxonomy/taxonomy.module',
        'basename' => 'taxonomy.module',
        'name' => 'taxonomy',
        'info' => 
        array (
          'name' => 'Taxonomy',
          'description' => 'Enables the categorization of content.',
          'package' => 'Core',
          'version' => '7.28',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'options',
          ),
          'files' => 
          array (
            0 => 'taxonomy.module',
            1 => 'taxonomy.test',
          ),
          'configure' => 'admin/structure/taxonomy',
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'php' => '5.2.4',
        ),
        'schema_version' => '7011',
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'syslog' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/syslog/syslog.module',
        'basename' => 'syslog.module',
        'name' => 'syslog',
        'info' => 
        array (
          'name' => 'Syslog',
          'description' => 'Logs and records system events to syslog.',
          'package' => 'Core',
          'version' => '7.28',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'syslog.test',
          ),
          'configure' => 'admin/config/development/logging',
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'drupal_system_listing_compatible_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/simpletest/tests/drupal_system_listing_compatible_test/drupal_system_listing_compatible_test.module',
        'basename' => 'drupal_system_listing_compatible_test.module',
        'name' => 'drupal_system_listing_compatible_test',
        'info' => 
        array (
          'name' => 'Drupal system listing compatible test',
          'description' => 'Support module for testing the drupal_system_listing function.',
          'package' => 'Testing',
          'version' => '7.28',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'drupal_system_listing_incompatible_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/simpletest/tests/drupal_system_listing_incompatible_test/drupal_system_listing_incompatible_test.module',
        'basename' => 'drupal_system_listing_incompatible_test.module',
        'name' => 'drupal_system_listing_incompatible_test',
        'info' => 
        array (
          'name' => 'Drupal system listing incompatible test',
          'description' => 'Support module for testing the drupal_system_listing function.',
          'package' => 'Testing',
          'version' => '7.28',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'psr_0_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/simpletest/tests/psr_0_test/psr_0_test.module',
        'basename' => 'psr_0_test.module',
        'name' => 'psr_0_test',
        'info' => 
        array (
          'name' => 'PSR-0 Test cases',
          'description' => 'Test classes to be discovered by simpletest.',
          'core' => '7.x',
          'hidden' => true,
          'package' => 'Testing',
          'version' => '7.28',
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'common_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/simpletest/tests/common_test.module',
        'basename' => 'common_test.module',
        'name' => 'common_test',
        'info' => 
        array (
          'name' => 'Common Test',
          'description' => 'Support module for Common tests.',
          'package' => 'Testing',
          'version' => '7.28',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'common_test.css',
            ),
            'print' => 
            array (
              0 => 'common_test.print.css',
            ),
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'update_test_1' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/simpletest/tests/update_test_1.module',
        'basename' => 'update_test_1.module',
        'name' => 'update_test_1',
        'info' => 
        array (
          'name' => 'Update test',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => '7.28',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'entity_crud_hook_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/simpletest/tests/entity_crud_hook_test.module',
        'basename' => 'entity_crud_hook_test.module',
        'name' => 'entity_crud_hook_test',
        'info' => 
        array (
          'name' => 'Entity CRUD Hooks Test',
          'description' => 'Support module for CRUD hook tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.28',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'url_alter_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/simpletest/tests/url_alter_test.module',
        'basename' => 'url_alter_test.module',
        'name' => 'url_alter_test',
        'info' => 
        array (
          'name' => 'Url_alter tests',
          'description' => 'A support modules for url_alter hook testing.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.28',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'system_incompatible_core_version_dependencies_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/simpletest/tests/system_incompatible_core_version_dependencies_test.module',
        'basename' => 'system_incompatible_core_version_dependencies_test.module',
        'name' => 'system_incompatible_core_version_dependencies_test',
        'info' => 
        array (
          'name' => 'System incompatible core version dependencies test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.28',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'system_incompatible_core_version_test',
          ),
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'system_incompatible_module_version_dependencies_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/simpletest/tests/system_incompatible_module_version_dependencies_test.module',
        'basename' => 'system_incompatible_module_version_dependencies_test.module',
        'name' => 'system_incompatible_module_version_dependencies_test',
        'info' => 
        array (
          'name' => 'System incompatible module version dependencies test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.28',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'system_incompatible_module_version_test (>2.0)',
          ),
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'entity_cache_test_dependency' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/simpletest/tests/entity_cache_test_dependency.module',
        'basename' => 'entity_cache_test_dependency.module',
        'name' => 'entity_cache_test_dependency',
        'info' => 
        array (
          'name' => 'Entity cache test dependency',
          'description' => 'Support dependency module for testing entity cache.',
          'package' => 'Testing',
          'version' => '7.28',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'actions_loop_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/simpletest/tests/actions_loop_test.module',
        'basename' => 'actions_loop_test.module',
        'name' => 'actions_loop_test',
        'info' => 
        array (
          'name' => 'Actions loop test',
          'description' => 'Support module for action loop testing.',
          'package' => 'Testing',
          'version' => '7.28',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'file_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/simpletest/tests/file_test.module',
        'basename' => 'file_test.module',
        'name' => 'file_test',
        'info' => 
        array (
          'name' => 'File test',
          'description' => 'Support module for file handling tests.',
          'package' => 'Testing',
          'version' => '7.28',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'file_test.module',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'requirements2_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/simpletest/tests/requirements2_test.module',
        'basename' => 'requirements2_test.module',
        'name' => 'requirements2_test',
        'info' => 
        array (
          'name' => 'Requirements 2 Test',
          'description' => 'Tests that a module is not installed when the one it depends on fails hook_requirements(\'install).',
          'dependencies' => 
          array (
            0 => 'requirements1_test',
            1 => 'comment',
          ),
          'package' => 'Testing',
          'version' => '7.28',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'update_test_3' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/simpletest/tests/update_test_3.module',
        'basename' => 'update_test_3.module',
        'name' => 'update_test_3',
        'info' => 
        array (
          'name' => 'Update test',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => '7.28',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'ajax_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/simpletest/tests/ajax_test.module',
        'basename' => 'ajax_test.module',
        'name' => 'ajax_test',
        'info' => 
        array (
          'name' => 'AJAX Test',
          'description' => 'Support module for AJAX framework tests.',
          'package' => 'Testing',
          'version' => '7.28',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'system_incompatible_module_version_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/simpletest/tests/system_incompatible_module_version_test.module',
        'basename' => 'system_incompatible_module_version_test.module',
        'name' => 'system_incompatible_module_version_test',
        'info' => 
        array (
          'name' => 'System incompatible module version test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.28',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'taxonomy_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/simpletest/tests/taxonomy_test.module',
        'basename' => 'taxonomy_test.module',
        'name' => 'taxonomy_test',
        'info' => 
        array (
          'name' => 'Taxonomy test module',
          'description' => '"Tests functions and hooks not used in core".',
          'package' => 'Testing',
          'version' => '7.28',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'taxonomy',
          ),
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'path_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/simpletest/tests/path_test.module',
        'basename' => 'path_test.module',
        'name' => 'path_test',
        'info' => 
        array (
          'name' => 'Hook path tests',
          'description' => 'Support module for path hook testing.',
          'package' => 'Testing',
          'version' => '7.28',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'system_incompatible_core_version_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/simpletest/tests/system_incompatible_core_version_test.module',
        'basename' => 'system_incompatible_core_version_test.module',
        'name' => 'system_incompatible_core_version_test',
        'info' => 
        array (
          'name' => 'System incompatible core version test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.28',
          'core' => '5.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'database_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/simpletest/tests/database_test.module',
        'basename' => 'database_test.module',
        'name' => 'database_test',
        'info' => 
        array (
          'name' => 'Database Test',
          'description' => 'Support module for Database layer tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.28',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'theme_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/simpletest/tests/theme_test.module',
        'basename' => 'theme_test.module',
        'name' => 'theme_test',
        'info' => 
        array (
          'name' => 'Theme test',
          'description' => 'Support module for theme system testing.',
          'package' => 'Testing',
          'version' => '7.28',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'filter_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/simpletest/tests/filter_test.module',
        'basename' => 'filter_test.module',
        'name' => 'filter_test',
        'info' => 
        array (
          'name' => 'Filter test module',
          'description' => 'Tests filter hooks and functions.',
          'package' => 'Testing',
          'version' => '7.28',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'update_test_2' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/simpletest/tests/update_test_2.module',
        'basename' => 'update_test_2.module',
        'name' => 'update_test_2',
        'info' => 
        array (
          'name' => 'Update test',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => '7.28',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'image_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/simpletest/tests/image_test.module',
        'basename' => 'image_test.module',
        'name' => 'image_test',
        'info' => 
        array (
          'name' => 'Image test',
          'description' => 'Support module for image toolkit tests.',
          'package' => 'Testing',
          'version' => '7.28',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'session_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/simpletest/tests/session_test.module',
        'basename' => 'session_test.module',
        'name' => 'session_test',
        'info' => 
        array (
          'name' => 'Session test',
          'description' => 'Support module for session data testing.',
          'package' => 'Testing',
          'version' => '7.28',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'common_test_cron_helper' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/simpletest/tests/common_test_cron_helper.module',
        'basename' => 'common_test_cron_helper.module',
        'name' => 'common_test_cron_helper',
        'info' => 
        array (
          'name' => 'Common Test Cron Helper',
          'description' => 'Helper module for CronRunTestCase::testCronExceptions().',
          'package' => 'Testing',
          'version' => '7.28',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'requirements1_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/simpletest/tests/requirements1_test.module',
        'basename' => 'requirements1_test.module',
        'name' => 'requirements1_test',
        'info' => 
        array (
          'name' => 'Requirements 1 Test',
          'description' => 'Tests that a module is not installed when it fails hook_requirements(\'install\').',
          'package' => 'Testing',
          'version' => '7.28',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'module_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/simpletest/tests/module_test.module',
        'basename' => 'module_test.module',
        'name' => 'module_test',
        'info' => 
        array (
          'name' => 'Module test',
          'description' => 'Support module for module system testing.',
          'package' => 'Testing',
          'version' => '7.28',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'entity_cache_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/simpletest/tests/entity_cache_test.module',
        'basename' => 'entity_cache_test.module',
        'name' => 'entity_cache_test',
        'info' => 
        array (
          'name' => 'Entity cache test',
          'description' => 'Support module for testing entity cache.',
          'package' => 'Testing',
          'version' => '7.28',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'entity_cache_test_dependency',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'xmlrpc_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/simpletest/tests/xmlrpc_test.module',
        'basename' => 'xmlrpc_test.module',
        'name' => 'xmlrpc_test',
        'info' => 
        array (
          'name' => 'XML-RPC Test',
          'description' => 'Support module for XML-RPC tests according to the validator1 specification.',
          'package' => 'Testing',
          'version' => '7.28',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'update_script_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/simpletest/tests/update_script_test.module',
        'basename' => 'update_script_test.module',
        'name' => 'update_script_test',
        'info' => 
        array (
          'name' => 'Update script test',
          'description' => 'Support module for update script testing.',
          'package' => 'Testing',
          'version' => '7.28',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'system_dependencies_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/simpletest/tests/system_dependencies_test.module',
        'basename' => 'system_dependencies_test.module',
        'name' => 'system_dependencies_test',
        'info' => 
        array (
          'name' => 'System dependency test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.28',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => '_missing_dependency',
          ),
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'form_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/simpletest/tests/form_test.module',
        'basename' => 'form_test.module',
        'name' => 'form_test',
        'info' => 
        array (
          'name' => 'FormAPI Test',
          'description' => 'Support module for Form API tests.',
          'package' => 'Testing',
          'version' => '7.28',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'ajax_forms_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/simpletest/tests/ajax_forms_test.module',
        'basename' => 'ajax_forms_test.module',
        'name' => 'ajax_forms_test',
        'info' => 
        array (
          'name' => 'AJAX form test mock module',
          'description' => 'Test for AJAX form calls.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.28',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'batch_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/simpletest/tests/batch_test.module',
        'basename' => 'batch_test.module',
        'name' => 'batch_test',
        'info' => 
        array (
          'name' => 'Batch API test',
          'description' => 'Support module for Batch API tests.',
          'package' => 'Testing',
          'version' => '7.28',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'entity_query_access_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/simpletest/tests/entity_query_access_test.module',
        'basename' => 'entity_query_access_test.module',
        'name' => 'entity_query_access_test',
        'info' => 
        array (
          'name' => 'Entity query access test',
          'description' => 'Support module for checking entity query results.',
          'package' => 'Testing',
          'version' => '7.28',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'system_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/simpletest/tests/system_test.module',
        'basename' => 'system_test.module',
        'name' => 'system_test',
        'info' => 
        array (
          'name' => 'System test',
          'description' => 'Support module for system testing.',
          'package' => 'Testing',
          'version' => '7.28',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'system_test.module',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'error_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/simpletest/tests/error_test.module',
        'basename' => 'error_test.module',
        'name' => 'error_test',
        'info' => 
        array (
          'name' => 'Error test',
          'description' => 'Support module for error and exception testing.',
          'package' => 'Testing',
          'version' => '7.28',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'menu_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/simpletest/tests/menu_test.module',
        'basename' => 'menu_test.module',
        'name' => 'menu_test',
        'info' => 
        array (
          'name' => 'Hook menu tests',
          'description' => 'Support module for menu hook testing.',
          'package' => 'Testing',
          'version' => '7.28',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'simpletest' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/simpletest/simpletest.module',
        'basename' => 'simpletest.module',
        'name' => 'simpletest',
        'info' => 
        array (
          'name' => 'Testing',
          'description' => 'Provides a framework for unit and functional testing.',
          'package' => 'Core',
          'version' => '7.28',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'simpletest.test',
            1 => 'drupal_web_test_case.php',
            2 => 'tests/actions.test',
            3 => 'tests/ajax.test',
            4 => 'tests/batch.test',
            5 => 'tests/bootstrap.test',
            6 => 'tests/cache.test',
            7 => 'tests/common.test',
            8 => 'tests/database_test.test',
            9 => 'tests/entity_crud.test',
            10 => 'tests/entity_crud_hook_test.test',
            11 => 'tests/entity_query.test',
            12 => 'tests/error.test',
            13 => 'tests/file.test',
            14 => 'tests/filetransfer.test',
            15 => 'tests/form.test',
            16 => 'tests/graph.test',
            17 => 'tests/image.test',
            18 => 'tests/lock.test',
            19 => 'tests/mail.test',
            20 => 'tests/menu.test',
            21 => 'tests/module.test',
            22 => 'tests/pager.test',
            23 => 'tests/password.test',
            24 => 'tests/path.test',
            25 => 'tests/registry.test',
            26 => 'tests/schema.test',
            27 => 'tests/session.test',
            28 => 'tests/tablesort.test',
            29 => 'tests/theme.test',
            30 => 'tests/unicode.test',
            31 => 'tests/update.test',
            32 => 'tests/xmlrpc.test',
            33 => 'tests/upgrade/upgrade.test',
            34 => 'tests/upgrade/upgrade.comment.test',
            35 => 'tests/upgrade/upgrade.filter.test',
            36 => 'tests/upgrade/upgrade.forum.test',
            37 => 'tests/upgrade/upgrade.locale.test',
            38 => 'tests/upgrade/upgrade.menu.test',
            39 => 'tests/upgrade/upgrade.node.test',
            40 => 'tests/upgrade/upgrade.taxonomy.test',
            41 => 'tests/upgrade/upgrade.trigger.test',
            42 => 'tests/upgrade/upgrade.translatable.test',
            43 => 'tests/upgrade/upgrade.upload.test',
            44 => 'tests/upgrade/upgrade.user.test',
            45 => 'tests/upgrade/update.aggregator.test',
            46 => 'tests/upgrade/update.trigger.test',
            47 => 'tests/upgrade/update.field.test',
            48 => 'tests/upgrade/update.user.test',
          ),
          'configure' => 'admin/config/development/testing/settings',
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'color' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/modules/color/color.module',
        'basename' => 'color.module',
        'name' => 'color',
        'info' => 
        array (
          'name' => 'Color',
          'description' => 'Allows administrators to change the color scheme of compatible themes.',
          'package' => 'Core',
          'version' => '7.28',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'color.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1399522731',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'drupal',
        'version' => '7.28',
      ),
    ),
    'themes' => 
    array (
      'seven' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/themes/seven/seven.info',
        'basename' => 'seven.info',
        'name' => 'Seven',
        'info' => 
        array (
          'name' => 'Seven',
          'description' => 'A simple one-column, tableless, fluid width administration theme.',
          'package' => 'Core',
          'version' => '7.28',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'screen' => 
            array (
              0 => 'reset.css',
              1 => 'style.css',
            ),
          ),
          'settings' => 
          array (
            'shortcut_module_link' => '1',
          ),
          'regions' => 
          array (
            'content' => 'Content',
            'help' => 'Help',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'sidebar_first' => 'First sidebar',
          ),
          'regions_hidden' => 
          array (
            0 => 'sidebar_first',
          ),
          'project' => 'drupal',
          'datestamp' => '1399522731',
        ),
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'stark' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/themes/stark/stark.info',
        'basename' => 'stark.info',
        'name' => 'Stark',
        'info' => 
        array (
          'name' => 'Stark',
          'description' => 'This theme demonstrates Drupal\'s default HTML markup and CSS styles. To learn how to build your own theme and override Drupal\'s default code, see the <a href="http://drupal.org/theme-guide">Theming Guide</a>.',
          'package' => 'Core',
          'version' => '7.28',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'layout.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1399522731',
        ),
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'bartik' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/themes/bartik/bartik.info',
        'basename' => 'bartik.info',
        'name' => 'Bartik',
        'info' => 
        array (
          'name' => 'Bartik',
          'description' => 'A flexible, recolorable theme with many regions.',
          'package' => 'Core',
          'version' => '7.28',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/layout.css',
              1 => 'css/style.css',
              2 => 'css/colors.css',
            ),
            'print' => 
            array (
              0 => 'css/print.css',
            ),
          ),
          'regions' => 
          array (
            'header' => 'Header',
            'help' => 'Help',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'highlighted' => 'Highlighted',
            'featured' => 'Featured',
            'content' => 'Content',
            'sidebar_first' => 'Sidebar first',
            'sidebar_second' => 'Sidebar second',
            'triptych_first' => 'Triptych first',
            'triptych_middle' => 'Triptych middle',
            'triptych_last' => 'Triptych last',
            'footer_firstcolumn' => 'Footer first column',
            'footer_secondcolumn' => 'Footer second column',
            'footer_thirdcolumn' => 'Footer third column',
            'footer_fourthcolumn' => 'Footer fourth column',
            'footer' => 'Footer',
          ),
          'settings' => 
          array (
            'shortcut_module_link' => '0',
          ),
          'project' => 'drupal',
          'datestamp' => '1399522731',
        ),
        'project' => 'drupal',
        'version' => '7.28',
      ),
      'garland' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/themes/garland/garland.info',
        'basename' => 'garland.info',
        'name' => 'Garland',
        'info' => 
        array (
          'name' => 'Garland',
          'description' => 'A multi-column theme which can be configured to modify colors and switch between fixed and fluid width layouts.',
          'package' => 'Core',
          'version' => '7.28',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'style.css',
            ),
            'print' => 
            array (
              0 => 'print.css',
            ),
          ),
          'settings' => 
          array (
            'garland_width' => 'fluid',
          ),
          'project' => 'drupal',
          'datestamp' => '1399522731',
        ),
        'project' => 'drupal',
        'version' => '7.28',
      ),
    ),
    'platforms' => 
    array (
      'drupal' => 
      array (
        'short_name' => 'drupal',
        'version' => '7.28',
        'description' => 'This platform is running Drupal 7.28',
      ),
    ),
    'profiles' => 
    array (
      'openchurch' => 
      array (
        'name' => 'openchurch',
        'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/openchurch.profile',
        'project' => 'openchurch',
        'info' => 
        array (
          'name' => 'OpenChurch',
          'description' => 'OpenChurch Distribution',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'color',
            2 => 'comment',
            3 => 'contextual',
            4 => 'dblog',
            5 => 'field',
            6 => 'field_ui',
            7 => 'file',
            8 => 'help',
            9 => 'image',
            10 => 'list',
            11 => 'menu',
            12 => 'number',
            13 => 'options',
            14 => 'overlay',
            15 => 'path',
            16 => 'php',
            17 => 'rdf',
            18 => 'search',
            19 => 'shortcut',
            20 => 'statistics',
            21 => 'syslog',
            22 => 'taxonomy',
            23 => 'addressfield',
            24 => 'admin_menu_toolbar',
            25 => 'apps',
            26 => 'backup_migrate',
            27 => 'bulk_export',
            28 => 'calendar',
            29 => 'captcha',
            30 => 'cck',
            31 => 'content_taxonomy',
            32 => 'content_taxonomy_autocomplete',
            33 => 'context',
            34 => 'context_ui',
            35 => 'ctools',
            36 => 'date',
            37 => 'date_repeat',
            38 => 'date_popup',
            39 => 'date_tools',
            40 => 'date_views',
            41 => 'defaultcontent',
            42 => 'email',
            43 => 'entity',
            44 => 'features',
            45 => 'fe_nodequeue',
            46 => 'filefield_sources',
            47 => 'file_styles',
            48 => 'fontyourface',
            49 => 'fontyourface_ui',
            50 => 'fusion_accelerator',
            51 => 'fusion_apply_ui',
            52 => 'google_fonts_api',
            53 => 'imce',
            54 => 'imce_wysiwyg',
            55 => 'libraries',
            56 => 'lightbox2',
            57 => 'link',
            58 => 'media',
            59 => 'media_vimeo',
            60 => 'media_youtube',
            61 => 'menu_breadcrumb',
            62 => 'metatag',
            63 => 'nodequeue',
            64 => 'node_reference',
            65 => 'page_manager',
            66 => 'page_title',
            67 => 'panels',
            68 => 'panels_ipe',
            69 => 'pathauto',
            70 => 'pathologic',
            71 => 'plup',
            72 => 'plupload',
            73 => 'references',
            74 => 'references_dialog',
            75 => 'recaptcha',
            76 => 'rss_category',
            77 => 'rss_creator',
            78 => 'rss_date',
            79 => 'rss_enclosure',
            80 => 'rss_georss',
            81 => 'rules',
            82 => 'rules_admin',
            83 => 'strongarm',
            84 => 'styles',
            85 => 'styles_ui',
            86 => 'token',
            87 => 'user_reference',
            88 => 'views',
            89 => 'views_bulk_operations',
            90 => 'views_php',
            91 => 'views_slideshow',
            92 => 'views_slideshow_cycle',
            93 => 'views_ui',
            94 => 'webform',
            95 => 'wysiwyg',
            96 => 'openchurch_ministry',
            97 => 'openchurch_ministry_demo_content',
            98 => 'openchurch_blog',
            99 => 'openchurch_blog_demo_content',
            100 => 'openchurch_bulletin',
            101 => 'openchurch_bulletin_demo_content',
            102 => 'openchurch_events',
            103 => 'openchurch_events_demo_content',
            104 => 'openchurch_gallery',
            105 => 'openchurch_gallery_demo_content',
            106 => 'openchurch_giving',
            107 => 'openchurch_giving_demo_content',
            108 => 'openchurch_homepage_rotator',
            109 => 'openchurch_homepage_rotator_demo_content',
            110 => 'openchurch_image',
            111 => 'openchurch_podcast',
            112 => 'openchurch_podcast_demo_content',
            113 => 'openchurch_social',
            114 => 'openchurch_staff',
            115 => 'openchurch_staff_demo_content',
            116 => 'openchurch_video',
            117 => 'openchurch_video_demo_content',
            118 => 'openchurch_defaults',
            119 => 'openchurch_defaults_demo_content',
            120 => 'wysiwyg_iframe',
          ),
          'files' => 
          array (
            0 => 'openchurch.profile',
            1 => 'openchurch.install',
          ),
          'version' => '7.x-1.11-beta8',
          'project' => 'openchurch',
          'datestamp' => '1359936580',
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'version' => '7.x-1.11-beta8',
      ),
    ),
  ),
  'sites-all' => 
  array (
    'modules' => 
    array (
      'entity_test' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/sites/all/modules/entity/tests/entity_test.module',
        'basename' => 'entity_test.module',
        'name' => 'entity_test',
        'info' => 
        array (
          'name' => 'Entity CRUD test module',
          'description' => 'Provides entity types based upon the CRUD API.',
          'version' => '7.x-1.5',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity_test.module',
            1 => 'entity_test.install',
          ),
          'dependencies' => 
          array (
            0 => 'entity',
          ),
          'hidden' => true,
          'project' => 'entity',
          'datestamp' => '1396975454',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity',
        'version' => '7.x-1.5',
      ),
      'entity_feature' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/sites/all/modules/entity/tests/entity_feature.module',
        'basename' => 'entity_feature.module',
        'name' => 'entity_feature',
        'info' => 
        array (
          'name' => 'Entity feature module',
          'description' => 'Provides some entities in code.',
          'version' => '7.x-1.5',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity_feature.module',
          ),
          'dependencies' => 
          array (
            0 => 'entity_test',
          ),
          'hidden' => true,
          'project' => 'entity',
          'datestamp' => '1396975454',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity',
        'version' => '7.x-1.5',
      ),
      'entity_test_i18n' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/sites/all/modules/entity/tests/entity_test_i18n.module',
        'basename' => 'entity_test_i18n.module',
        'name' => 'entity_test_i18n',
        'info' => 
        array (
          'name' => 'Entity-test type translation',
          'description' => 'Allows translating entity-test types.',
          'dependencies' => 
          array (
            0 => 'entity_test',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.x-1.5',
          'project' => 'entity',
          'datestamp' => '1396975454',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity',
        'version' => '7.x-1.5',
      ),
      'entity' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/sites/all/modules/entity/entity.module',
        'basename' => 'entity.module',
        'name' => 'entity',
        'info' => 
        array (
          'name' => 'Entity API',
          'description' => 'Enables modules to work with any entity type and to provide entities.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity.features.inc',
            1 => 'entity.i18n.inc',
            2 => 'entity.info.inc',
            3 => 'entity.rules.inc',
            4 => 'entity.test',
            5 => 'includes/entity.inc',
            6 => 'includes/entity.controller.inc',
            7 => 'includes/entity.ui.inc',
            8 => 'includes/entity.wrapper.inc',
            9 => 'views/entity.views.inc',
            10 => 'views/handlers/entity_views_field_handler_helper.inc',
            11 => 'views/handlers/entity_views_handler_area_entity.inc',
            12 => 'views/handlers/entity_views_handler_field_boolean.inc',
            13 => 'views/handlers/entity_views_handler_field_date.inc',
            14 => 'views/handlers/entity_views_handler_field_duration.inc',
            15 => 'views/handlers/entity_views_handler_field_entity.inc',
            16 => 'views/handlers/entity_views_handler_field_field.inc',
            17 => 'views/handlers/entity_views_handler_field_numeric.inc',
            18 => 'views/handlers/entity_views_handler_field_options.inc',
            19 => 'views/handlers/entity_views_handler_field_text.inc',
            20 => 'views/handlers/entity_views_handler_field_uri.inc',
            21 => 'views/handlers/entity_views_handler_relationship_by_bundle.inc',
            22 => 'views/handlers/entity_views_handler_relationship.inc',
            23 => 'views/plugins/entity_views_plugin_row_entity_view.inc',
          ),
          'version' => '7.x-1.5',
          'project' => 'entity',
          'datestamp' => '1396975454',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'entity',
        'version' => '7.x-1.5',
      ),
      'entity_token' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/sites/all/modules/entity/entity_token.module',
        'basename' => 'entity_token.module',
        'name' => 'entity_token',
        'info' => 
        array (
          'name' => 'Entity tokens',
          'description' => 'Provides token replacements for all properties that have no tokens and are known to the entity API.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity_token.tokens.inc',
            1 => 'entity_token.module',
          ),
          'dependencies' => 
          array (
            0 => 'entity',
          ),
          'version' => '7.x-1.5',
          'project' => 'entity',
          'datestamp' => '1396975454',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity',
        'version' => '7.x-1.5',
      ),
      'revisioning_ux' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/sites/all/modules/revisioning/revisioning_ux/revisioning_ux.module',
        'basename' => 'revisioning_ux.module',
        'name' => 'revisioning_ux',
        'info' => 
        array (
          'name' => 'Revisioning UX',
          'description' => 'Revisioning user experience improvements for more consistent tab behavior',
          'core' => '7.x',
          'version' => '7.x-1.8',
          'project' => 'revisioning',
          'datestamp' => '1396912155',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'revisioning',
        'version' => '7.x-1.8',
      ),
      'revisioning_scheduler' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/sites/all/modules/revisioning/revisioning_scheduler/revisioning_scheduler.module',
        'basename' => 'revisioning_scheduler.module',
        'name' => 'revisioning_scheduler',
        'info' => 
        array (
          'name' => 'Revisioning Scheduler',
          'description' => 'Allows revisions to be published or reverted at specified times.',
          'dependencies' => 
          array (
            0 => 'revisioning',
          ),
          'configure' => 'admin/config/content/revisioning_scheduler',
          'core' => '7.x',
          'version' => '7.x-1.8',
          'project' => 'revisioning',
          'datestamp' => '1396912155',
          'php' => '5.2.4',
        ),
        'schema_version' => '7015',
        'project' => 'revisioning',
        'version' => '7.x-1.8',
      ),
      'revisioning' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/sites/all/modules/revisioning/revisioning.module',
        'basename' => 'revisioning.module',
        'name' => 'revisioning',
        'info' => 
        array (
          'name' => 'Revisioning',
          'description' => 'Allows the creation and modification of content while the current revision remains unchanged and publicly visible until the changes have been reviewed by a moderator.',
          'core' => '7.x',
          'configure' => 'admin/config/content/revisioning',
          'files' => 
          array (
            0 => 'views/revisioning_handler_field_node_last_editor.inc',
            1 => 'views/revisioning_handler_field_node_number_of_revisions.inc',
            2 => 'views/revisioning_handler_field_node_revision_moderation.inc',
            3 => 'views/revisioning_handler_field_node_state.inc',
            4 => 'views/revisioning_handler_field_revision_state.inc',
            5 => 'views/revisioning_handler_filter_node_number_of_revisions.inc',
            6 => 'views/revisioning_handler_filter_node_revision_moderation.inc',
            7 => 'views/revisioning_handler_filter_node_state.inc',
            8 => 'views/revisioning_handler_filter_revision_state.inc',
            9 => 'views/revisioning_handler_filter_revision_latest.inc',
            10 => 'views/revisioning_handler_filter_revision_latest_published.inc',
          ),
          'version' => '7.x-1.8',
          'project' => 'revisioning',
          'datestamp' => '1396912155',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7107',
        'project' => 'revisioning',
        'version' => '7.x-1.8',
      ),
      'field_tools_taxonomy' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/sites/all/modules/field_tools/field_tools_taxonomy/field_tools_taxonomy.module',
        'basename' => 'field_tools_taxonomy.module',
        'name' => 'field_tools_taxonomy',
        'info' => 
        array (
          'name' => 'Field tools taxonomy',
          'description' => 'Allows taxonomy vocabularies to be applied to entities.',
          'dependencies' => 
          array (
            0 => 'field_ui',
            1 => 'taxonomy',
          ),
          'package' => 'Fields',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'field_tools_taxonomy.module',
            1 => 'field_tools_taxonomy.admin.inc',
          ),
          'version' => '7.x-1.0-alpha6',
          'project' => 'field_tools',
          'datestamp' => '1393069411',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'field_tools',
        'version' => '7.x-1.0-alpha6',
      ),
      'field_tools' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/sites/all/modules/field_tools/field_tools.module',
        'basename' => 'field_tools.module',
        'name' => 'field_tools',
        'info' => 
        array (
          'name' => 'Field tools',
          'description' => 'Allows fields to be cloned to other entities.',
          'dependencies' => 
          array (
            0 => 'field_ui',
            1 => 'ctools',
          ),
          'package' => 'Fields',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'field_tools.module',
            1 => 'field_tools.admin.inc',
          ),
          'version' => '7.x-1.0-alpha6',
          'project' => 'field_tools',
          'datestamp' => '1393069411',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'field_tools',
        'version' => '7.x-1.0-alpha6',
      ),
      'diff' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/sites/all/modules/diff/diff.module',
        'basename' => 'diff.module',
        'name' => 'diff',
        'info' => 
        array (
          'name' => 'Diff',
          'description' => 'Show differences between content revisions.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'DiffEngine.php',
          ),
          'version' => '7.x-3.2',
          'project' => 'diff',
          'datestamp' => '1352784357',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7305',
        'project' => 'diff',
        'version' => '7.x-3.2',
      ),
      'flocknote' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/sites/all/modules/flocknote/flocknote.module',
        'basename' => 'flocknote.module',
        'name' => 'flocknote',
        'info' => 
        array (
          'name' => 'Flocknote',
          'description' => 'Flocknote integration module for Drupal.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'Flocknote-SDK-for-PHP/flocknote.php',
          ),
          'configure' => 'admin/config/services/flocknote',
          'version' => '7.x-1.0-beta2',
          'project' => 'flocknote',
          'datestamp' => '1346356334',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'flocknote',
        'version' => '7.x-1.0-beta2',
      ),
      'insert' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/sites/all/modules/insert/insert.module',
        'basename' => 'insert.module',
        'name' => 'insert',
        'info' => 
        array (
          'name' => 'Insert',
          'description' => 'Assists in inserting files, images, or other media into the body field or other text areas.',
          'core' => '7.x',
          'version' => '7.x-1.3',
          'project' => 'insert',
          'datestamp' => '1361661838',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'insert',
        'version' => '7.x-1.3',
      ),
      'qasstl_redirect' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/sites/all/modules/qasstl_redirect/qasstl_redirect.module',
        'basename' => 'qasstl_redirect.module',
        'name' => 'qasstl_redirect',
        'info' => 
        array (
          'name' => 'QASSTL Redirects',
          'description' => 'Custom redirects for qasstl.org',
          'core' => '7.x',
          'dependencies' => 
          array (
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'googleanalytics' => 
      array (
        'filename' => '/data/disk/v4643649448/static/qasstl_org/sites/all/modules/google_analytics/googleanalytics.module',
        'basename' => 'googleanalytics.module',
        'name' => 'googleanalytics',
        'info' => 
        array (
          'name' => 'Google Analytics',
          'description' => 'Allows your site to be tracked by Google Analytics by adding a Javascript tracking code to every page.',
          'core' => '7.x',
          'package' => 'Statistics',
          'configure' => 'admin/config/system/googleanalytics',
          'files' => 
          array (
            0 => 'googleanalytics.test',
          ),
          'test_dependencies' => 
          array (
            0 => 'token',
          ),
          'version' => '7.x-1.4',
          'project' => 'google_analytics',
          'datestamp' => '1382021586',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7007',
        'project' => 'google_analytics',
        'version' => '7.x-1.4',
      ),
    ),
    'themes' => 
    array (
    ),
  ),
  'profiles' => 
  array (
    'openchurch' => 
    array (
      'modules' => 
      array (
        'entity_test' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/entity/tests/entity_test.module',
          'basename' => 'entity_test.module',
          'name' => 'entity_test',
          'info' => 
          array (
            'name' => 'Entity CRUD test module',
            'description' => 'Provides entity types based upon the CRUD API.',
            'version' => '7.x-1.0-rc1',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'entity_test.module',
              1 => 'entity_test.install',
            ),
            'dependencies' => 
            array (
              0 => 'entity',
            ),
            'hidden' => true,
            'project' => 'entity',
            'datestamp' => '1320914735',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'entity',
          'version' => '7.x-1.0-rc1',
        ),
        'entity_feature' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/entity/tests/entity_feature.module',
          'basename' => 'entity_feature.module',
          'name' => 'entity_feature',
          'info' => 
          array (
            'name' => 'Entity feature module',
            'description' => 'Provides some entities in code.',
            'version' => '7.x-1.0-rc1',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'entity_feature.module',
            ),
            'dependencies' => 
            array (
              0 => 'entity_test',
            ),
            'hidden' => true,
            'project' => 'entity',
            'datestamp' => '1320914735',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'entity',
          'version' => '7.x-1.0-rc1',
        ),
        'entity_test_i18n' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/entity/tests/entity_test_i18n.module',
          'basename' => 'entity_test_i18n.module',
          'name' => 'entity_test_i18n',
          'info' => 
          array (
            'name' => 'Entity-test type translation',
            'description' => 'Allows translating entity-test types.',
            'dependencies' => 
            array (
              0 => 'entity_test',
              1 => 'i18n_string',
            ),
            'package' => 'Multilingual - Internationalization',
            'core' => '7.x',
            'hidden' => true,
            'version' => '7.x-1.0',
            'project' => 'entity',
            'datestamp' => '1356471145',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'entity',
          'version' => '7.x-1.0',
        ),
        'entity' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/entity/entity.module',
          'basename' => 'entity.module',
          'name' => 'entity',
          'info' => 
          array (
            'name' => 'Entity API',
            'description' => 'Enables modules to work with any entity type and to provide entities.',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'entity.features.inc',
              1 => 'entity.info.inc',
              2 => 'entity.rules.inc',
              3 => 'entity.test',
              4 => 'includes/entity.inc',
              5 => 'includes/entity.controller.inc',
              6 => 'includes/entity.ui.inc',
              7 => 'includes/entity.wrapper.inc',
              8 => 'views/entity.views.inc',
              9 => 'views/handlers/entity_views_field_handler_helper.inc',
              10 => 'views/handlers/entity_views_handler_field_boolean.inc',
              11 => 'views/handlers/entity_views_handler_field_date.inc',
              12 => 'views/handlers/entity_views_handler_field_duration.inc',
              13 => 'views/handlers/entity_views_handler_field_entity.inc',
              14 => 'views/handlers/entity_views_handler_field_field.inc',
              15 => 'views/handlers/entity_views_handler_field_numeric.inc',
              16 => 'views/handlers/entity_views_handler_field_options.inc',
              17 => 'views/handlers/entity_views_handler_field_text.inc',
              18 => 'views/handlers/entity_views_handler_field_uri.inc',
              19 => 'views/handlers/entity_views_handler_relationship_by_bundle.inc',
              20 => 'views/handlers/entity_views_handler_relationship.inc',
              21 => 'views/plugins/entity_views_plugin_row_entity_view.inc',
            ),
            'version' => '7.x-1.0-rc1',
            'project' => 'entity',
            'datestamp' => '1320914735',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7002',
          'project' => 'entity',
          'version' => '7.x-1.0-rc1',
        ),
        'entity_token' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/entity/entity_token.module',
          'basename' => 'entity_token.module',
          'name' => 'entity_token',
          'info' => 
          array (
            'name' => 'Entity tokens',
            'description' => 'Provides token replacements for all properties that have no tokens and are known to the entity API.',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'entity_token.tokens.inc',
              1 => 'entity_token.module',
            ),
            'dependencies' => 
            array (
              0 => 'entity',
            ),
            'version' => '7.x-1.0-rc1',
            'project' => 'entity',
            'datestamp' => '1320914735',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'entity',
          'version' => '7.x-1.0-rc1',
        ),
        'wysiwyg_iframe' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/custom/wysiwyg_iframe/wysiwyg_iframe.module',
          'basename' => 'wysiwyg_iframe.module',
          'name' => 'wysiwyg_iframe',
          'info' => 
          array (
            'name' => 'Wysiwyg iFrame',
            'description' => 'Extends TinyMCE to allow other elements e.g. iframes',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'wysiwyg',
            ),
            'version' => '7.x-1.11-beta8',
            'project' => 'openchurch',
            'datestamp' => '1359936580',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'openchurch',
          'version' => '7.x-1.11-beta8',
        ),
        'openchurch_image' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/features/openchurch_image/openchurch_image.module',
          'basename' => 'openchurch_image.module',
          'name' => 'openchurch_image',
          'info' => 
          array (
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'features',
              2 => 'image',
              3 => 'link',
              4 => 'strongarm',
            ),
            'description' => 'Images are used when only a single image is needed and can be embedded within the sidebar or content area.',
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'strongarm:strongarm:1',
              ),
              'field' => 
              array (
                0 => 'node-openchurch_image-body',
                1 => 'node-openchurch_image-field_oc_image',
              ),
              'node' => 
              array (
                0 => 'openchurch_image',
              ),
              'variable' => 
              array (
                0 => 'comment_anonymous_openchurch_image',
                1 => 'comment_default_mode_openchurch_image',
                2 => 'comment_default_per_page_openchurch_image',
                3 => 'comment_form_location_openchurch_image',
                4 => 'comment_openchurch_image',
                5 => 'comment_preview_openchurch_image',
                6 => 'comment_subject_field_openchurch_image',
                7 => 'menu_options_openchurch_image',
                8 => 'menu_parent_openchurch_image',
                9 => 'node_options_openchurch_image',
                10 => 'node_preview_openchurch_image',
                11 => 'node_submitted_openchurch_image',
              ),
            ),
            'name' => 'Openchurch Image',
            'package' => 'Features',
            'php' => '5.2.4',
            'project' => 'openchurch',
            'version' => '7.x-1.11-beta8',
            'datestamp' => '1359936580',
          ),
          'schema_version' => 0,
          'project' => 'openchurch',
          'version' => '7.x-1.11-beta8',
        ),
        'openchurch_staff_demo_content' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/features/openchurch_staff/openchurch_staff_demo_content/openchurch_staff_demo_content.module',
          'basename' => 'openchurch_staff_demo_content.module',
          'name' => 'openchurch_staff_demo_content',
          'info' => 
          array (
            'name' => 'Openchurch Staff Demo Content',
            'description' => 'Sample staff content for the Openchurch Staff app.',
            'core' => '7.x',
            'package' => 'Openchurch',
            'php' => '5.2.4',
            'version' => '7.x-1.11-beta8',
            'project' => 'openchurch',
            'dependencies' => 
            array (
              0 => 'openchurch_staff',
            ),
            'features' => 
            array (
              'content' => 
              array (
                0 => 'oc_staff1',
                1 => 'oc_staff2',
              ),
            ),
            'datestamp' => '1359936580',
          ),
          'schema_version' => 0,
          'project' => 'openchurch',
          'version' => '7.x-1.11-beta8',
        ),
        'openchurch_staff' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/features/openchurch_staff/openchurch_staff.module',
          'basename' => 'openchurch_staff.module',
          'name' => 'openchurch_staff',
          'info' => 
          array (
            'name' => 'Openchurch Staff',
            'description' => 'A staff member is someone that works in the church, including both administrative and church leadership.',
            'core' => '7.x',
            'package' => 'Features',
            'php' => '5.2.4',
            'version' => '7.x-1.11-beta8',
            'project' => 'openchurch',
            'dependencies' => 
            array (
              0 => 'context',
              1 => 'context_breadcrumb_current_page',
              2 => 'ctools',
              3 => 'email',
              4 => 'features',
              5 => 'image',
              6 => 'menu',
              7 => 'node_reference',
              8 => 'page_manager',
              9 => 'panels',
              10 => 'strongarm',
              11 => 'taxonomy',
              12 => 'views',
            ),
            'features' => 
            array (
              'context' => 
              array (
                0 => 'openchurch-staff-breadcrumbs',
              ),
              'ctools' => 
              array (
                0 => 'context:context:3',
                1 => 'page_manager:pages_default:1',
                2 => 'panels:layouts:1',
                3 => 'strongarm:strongarm:1',
                4 => 'views:views_default:3.0',
              ),
              'field' => 
              array (
                0 => 'node-openchurch_staff-body',
                1 => 'node-openchurch_staff-field_oc_email',
                2 => 'node-openchurch_staff-field_oc_image',
                3 => 'node-openchurch_staff-field_oc_ministry',
                4 => 'node-openchurch_staff-field_oc_phone',
                5 => 'node-openchurch_staff-field_oc_position',
                6 => 'node-openchurch_staff-field_oc_staff_type',
              ),
              'image' => 
              array (
                0 => 'oc_staff_image',
                1 => 'oc_staff_thumb',
              ),
              'node' => 
              array (
                0 => 'openchurch_staff',
              ),
              'page_manager_handlers' => 
              array (
                0 => 'node_view_panel_context_4',
              ),
              'taxonomy' => 
              array (
                0 => 'openchurch_staff_type',
              ),
              'variable' => 
              array (
                0 => 'comment_anonymous_openchurch_staff',
                1 => 'comment_default_mode_openchurch_staff',
                2 => 'comment_default_per_page_openchurch_staff',
                3 => 'comment_form_location_openchurch_staff',
                4 => 'comment_openchurch_staff',
                5 => 'comment_preview_openchurch_staff',
                6 => 'comment_subject_field_openchurch_staff',
                7 => 'menu_options_openchurch_staff',
                8 => 'menu_parent_openchurch_staff',
                9 => 'node_options_openchurch_staff',
                10 => 'node_preview_openchurch_staff',
                11 => 'node_submitted_openchurch_staff',
              ),
              'views_view' => 
              array (
                0 => 'openchurch_staff',
              ),
            ),
            'datestamp' => '1359936580',
          ),
          'schema_version' => 0,
          'project' => 'openchurch',
          'version' => '7.x-1.11-beta8',
        ),
        'openchurch_blog_demo_content' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/features/openchurch_blog/openchurch_blog_demo_content/openchurch_blog_demo_content.module',
          'basename' => 'openchurch_blog_demo_content.module',
          'name' => 'openchurch_blog_demo_content',
          'info' => 
          array (
            'name' => 'Openchurch Blog Demo Content',
            'description' => 'Sample blogs for the Openchurch Blog app.',
            'core' => '7.x',
            'package' => 'Openchurch',
            'php' => '5.2.4',
            'version' => '7.x-1.11-beta8',
            'project' => 'openchurch',
            'dependencies' => 
            array (
              0 => 'openchurch_blog',
            ),
            'features' => 
            array (
              'content' => 
              array (
                0 => 'oc_blog1',
                1 => 'oc_blog2',
              ),
            ),
            'datestamp' => '1359936580',
          ),
          'schema_version' => 0,
          'project' => 'openchurch',
          'version' => '7.x-1.11-beta8',
        ),
        'openchurch_blog' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/features/openchurch_blog/openchurch_blog.module',
          'basename' => 'openchurch_blog.module',
          'name' => 'openchurch_blog',
          'info' => 
          array (
            'name' => 'Openchurch Blog',
            'description' => 'Simple church blog content type and list',
            'core' => '7.x',
            'package' => 'Features',
            'php' => '5.2.4',
            'version' => '7.x-1.11-beta8',
            'project' => 'openchurch',
            'dependencies' => 
            array (
              0 => 'context',
              1 => 'context_breadcrumb_current_page',
              2 => 'ctools',
              3 => 'features',
              4 => 'menu',
              5 => 'strongarm',
              6 => 'taxonomy',
              7 => 'views',
            ),
            'features' => 
            array (
              'context' => 
              array (
                0 => 'openchurch-blog-breadcrumbs',
              ),
              'ctools' => 
              array (
                0 => 'context:context:3',
                1 => 'page_manager:pages_default:1',
                2 => 'strongarm:strongarm:1',
                3 => 'views:views_default:3.0',
              ),
              'field' => 
              array (
                0 => 'node-openchurch_blog-body',
                1 => 'node-openchurch_blog-field_oc_blog_topic',
              ),
              'node' => 
              array (
                0 => 'openchurch_blog',
              ),
              'taxonomy' => 
              array (
                0 => 'openchurch_blog_topic',
              ),
              'variable' => 
              array (
                0 => 'comment_anonymous_openchurch_blog',
                1 => 'comment_default_mode_openchurch_blog',
                2 => 'comment_default_per_page_openchurch_blog',
                3 => 'comment_form_location_openchurch_blog',
                4 => 'comment_openchurch_blog',
                5 => 'comment_preview_openchurch_blog',
                6 => 'comment_subject_field_openchurch_blog',
                7 => 'language_content_type_openchurch_blog',
                8 => 'menu_options_openchurch_blog',
                9 => 'menu_parent_openchurch_blog',
                10 => 'node_options_openchurch_blog',
                11 => 'node_preview_openchurch_blog',
                12 => 'node_submitted_openchurch_blog',
              ),
              'views_view' => 
              array (
                0 => 'openchurch_blog_archives',
                1 => 'openchurch_latest_blogs',
              ),
            ),
            'datestamp' => '1359936580',
          ),
          'schema_version' => 0,
          'project' => 'openchurch',
          'version' => '7.x-1.11-beta8',
        ),
        'openchurch_defaults_demo_content' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/features/openchurch_defaults/openchurch_defaults_demo_content/openchurch_defaults_demo_content.module',
          'basename' => 'openchurch_defaults_demo_content.module',
          'name' => 'openchurch_defaults_demo_content',
          'info' => 
          array (
            'name' => 'Openchurch Defaults Demo Content',
            'description' => 'Demo content for the Openchurch Defaults app that doesn\'t belong to any one feature',
            'core' => '7.x',
            'package' => 'Openchurch',
            'php' => '5.2.4',
            'version' => '7.x-1.11-beta8',
            'project' => 'openchurch',
            'dependencies' => 
            array (
              0 => 'openchurch_defaults',
            ),
            'datestamp' => '1359936580',
            'features' => 
            array (
              'content' => 
              array (
                0 => 'oc_page_about',
                1 => 'oc_page_image_acknowledgements',
                2 => 'oc_page_map_directions',
                3 => 'oc_page_serve',
                4 => 'oc_page_times',
                5 => 'oc_webform',
              ),
            ),
          ),
          'schema_version' => 0,
          'project' => 'openchurch',
          'version' => '7.x-1.11-beta8',
        ),
        'openchurch_defaults' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/features/openchurch_defaults/openchurch_defaults.module',
          'basename' => 'openchurch_defaults.module',
          'name' => 'openchurch_defaults',
          'info' => 
          array (
            'name' => 'Openchurch Defaults',
            'description' => 'Openchurch default content, menus, etc.',
            'core' => '7.x',
            'package' => 'Features',
            'php' => '5.2.4',
            'version' => '7.x-1.11-beta8',
            'project' => 'openchurch',
            'dependencies' => 
            array (
              0 => 'block',
              1 => 'captcha',
              2 => 'comment',
              3 => 'context',
              4 => 'contextual',
              5 => 'dashboard',
              6 => 'defaultcontent',
              7 => 'features',
              8 => 'image',
              9 => 'lightbox2',
              10 => 'media_internet',
              11 => 'menu',
              12 => 'metatag',
              13 => 'nodequeue',
              14 => 'openchurch_image',
              15 => 'page_manager',
              16 => 'page_title',
              17 => 'panels',
              18 => 'path',
              19 => 'search',
              20 => 'shortcut',
              21 => 'strongarm',
              22 => 'superfish',
              23 => 'taxonomy',
              24 => 'views',
              25 => 'webform',
            ),
            'datestamp' => '1359936580',
            'features' => 
            array (
              'context' => 
              array (
                0 => 'openchurch-all-sitewide',
              ),
              'ctools' => 
              array (
                0 => 'context:context:3',
                1 => 'strongarm:strongarm:1',
                2 => 'views:views_default:3.0',
              ),
              'field' => 
              array (
                0 => 'node-page-body',
                1 => 'node-webform-body',
              ),
              'image' => 
              array (
                0 => 'oc_creative_element',
                1 => 'oc_thumb',
              ),
              'menu_custom' => 
              array (
                0 => 'main-menu',
                1 => 'menu-secondary-links',
              ),
              'node' => 
              array (
                0 => 'page',
                1 => 'webform',
              ),
              'user_permission' => 
              array (
                0 => 'access administration menu',
                1 => 'access all webform results',
                2 => 'access content overview',
                3 => 'access contextual links',
                4 => 'access dashboard',
                5 => 'access overlay',
                6 => 'add media from remote sources',
                7 => 'administer blocks',
                8 => 'administer comments',
                9 => 'administer filters',
                10 => 'administer media',
                11 => 'administer nodes',
                12 => 'administer shortcuts',
                13 => 'administer taxonomy',
                14 => 'administer users',
                15 => 'bypass node access',
                16 => 'create url aliases',
                17 => 'download original image',
                18 => 'edit meta tags',
                19 => 'import media',
                20 => 'manipulate all queues',
                21 => 'post comments',
                22 => 'search content',
                23 => 'set page title',
                24 => 'skip CAPTCHA',
                25 => 'skip comment approval',
                26 => 'use page manager',
                27 => 'use panels in place editing',
                28 => 'use text format full_html',
                29 => 'view pane admin links',
              ),
              'user_role' => 
              array (
                0 => 'editor',
              ),
              'variable' => 
              array (
                0 => 'comment_anonymous_page',
                1 => 'comment_anonymous_webform',
                2 => 'comment_default_mode_page',
                3 => 'comment_default_mode_webform',
                4 => 'comment_default_per_page_page',
                5 => 'comment_default_per_page_webform',
                6 => 'comment_form_location_page',
                7 => 'comment_form_location_webform',
                8 => 'comment_page',
                9 => 'comment_preview_page',
                10 => 'comment_preview_webform',
                11 => 'comment_subject_field_page',
                12 => 'comment_subject_field_webform',
                13 => 'comment_webform',
                14 => 'configurable_timezones',
                15 => 'date_format_long',
                16 => 'date_format_medium',
                17 => 'date_format_short',
                18 => 'menu_breadcrumb_append_node_title',
                19 => 'menu_breadcrumb_append_node_url',
                20 => 'menu_breadcrumb_determine_menu',
                21 => 'menu_breadcrumb_hide_on_single_item',
                22 => 'menu_breadcrumb_menu_patterns',
                23 => 'menu_breadcrumb_menus',
                24 => 'menu_breadcrumb_pattern_matches_rebuild',
                25 => 'menu_options_page',
                26 => 'menu_options_webform',
                27 => 'menu_parent_page',
                28 => 'menu_parent_webform',
                29 => 'menu_secondary_links_source',
                30 => 'node_options_page',
                31 => 'node_options_webform',
                32 => 'node_preview_page',
                33 => 'node_preview_webform',
                34 => 'node_submitted_page',
                35 => 'node_submitted_webform',
                36 => 'page_manager_node_view_disabled',
                37 => 'page_title_front',
                38 => 'pathauto_node_openchurch_blog_pattern',
                39 => 'pathauto_node_openchurch_bulletin_pattern',
                40 => 'pathauto_node_openchurch_charity_pattern',
                41 => 'pathauto_node_openchurch_event_pattern',
                42 => 'pathauto_node_openchurch_gallery_pattern',
                43 => 'pathauto_node_openchurch_homepage_rotator_pattern',
                44 => 'pathauto_node_openchurch_image_pattern',
                45 => 'pathauto_node_openchurch_ministry_pattern',
                46 => 'pathauto_node_openchurch_podcast_pattern',
                47 => 'pathauto_node_openchurch_staff_pattern',
                48 => 'pathauto_node_openchurch_video_pattern',
                49 => 'pathauto_node_page_pattern',
                50 => 'pathauto_node_pattern',
                51 => 'pathauto_node_webform_pattern',
                52 => 'superfish_arrow_1',
                53 => 'superfish_menu_1',
                54 => 'superfish_shadow_1',
                55 => 'superfish_slide_1',
                56 => 'superfish_style_1',
                57 => 'superfish_type_1',
                58 => 'theme_default',
                59 => 'theme_openchurch_mm_settings',
              ),
              'views_view' => 
              array (
                0 => 'openchurch_related_downloads',
              ),
            ),
          ),
          'schema_version' => 0,
          'project' => 'openchurch',
          'version' => '7.x-1.11-beta8',
        ),
        'openchurch_gallery_demo_content' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/features/openchurch_gallery/openchurch_gallery_demo_content/openchurch_gallery_demo_content.module',
          'basename' => 'openchurch_gallery_demo_content.module',
          'name' => 'openchurch_gallery_demo_content',
          'info' => 
          array (
            'name' => 'Openchurch Gallery Demo Content',
            'description' => 'Sample gallery content for the Openchurch Gallery app',
            'core' => '7.x',
            'package' => 'Openchurch',
            'php' => '5.2.4',
            'version' => '7.x-1.11-beta8',
            'project' => 'openchurch',
            'dependencies' => 
            array (
              0 => 'openchurch_gallery',
            ),
            'datestamp' => '1359936580',
            'features' => 
            array (
              'content' => 
              array (
                0 => 'oc_gallery1',
                1 => 'oc_gallery2',
              ),
            ),
          ),
          'schema_version' => 0,
          'project' => 'openchurch',
          'version' => '7.x-1.11-beta8',
        ),
        'openchurch_gallery' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/features/openchurch_gallery/openchurch_gallery.module',
          'basename' => 'openchurch_gallery.module',
          'name' => 'openchurch_gallery',
          'info' => 
          array (
            'name' => 'Openchurch Gallery',
            'description' => 'Galleries are collections of images with descriptions.',
            'core' => '7.x',
            'package' => 'Features',
            'php' => '5.2.4',
            'version' => '7.x-1.11-beta8',
            'project' => 'openchurch',
            'dependencies' => 
            array (
              0 => 'addressfield',
              1 => 'context',
              2 => 'context_breadcrumb_current_page',
              3 => 'ctools',
              4 => 'date',
              5 => 'features',
              6 => 'image',
              7 => 'media',
              8 => 'menu',
              9 => 'node_reference',
              10 => 'page_manager',
              11 => 'plup',
              12 => 'strongarm',
              13 => 'views',
            ),
            'datestamp' => '1359936580',
            'features' => 
            array (
              'context' => 
              array (
                0 => 'openchurch-photo-galleries-breadcrumbs',
              ),
              'ctools' => 
              array (
                0 => 'context:context:3',
                1 => 'page_manager:pages_default:1',
                2 => 'strongarm:strongarm:1',
                3 => 'views:views_default:3.0',
              ),
              'field' => 
              array (
                0 => 'node-openchurch_gallery-body',
                1 => 'node-openchurch_gallery-field_oc_date',
                2 => 'node-openchurch_gallery-field_oc_images',
                3 => 'node-openchurch_gallery-field_oc_location',
                4 => 'node-openchurch_gallery-field_oc_ministry',
                5 => 'node-openchurch_gallery-field_oc_thumb',
              ),
              'image' => 
              array (
                0 => 'oc_album_cover',
              ),
              'node' => 
              array (
                0 => 'openchurch_gallery',
              ),
              'page_manager_handlers' => 
              array (
                0 => 'node_view_panel_context_3',
              ),
              'variable' => 
              array (
                0 => 'comment_anonymous_openchurch_gallery',
                1 => 'comment_default_mode_openchurch_gallery',
                2 => 'comment_default_per_page_openchurch_gallery',
                3 => 'comment_form_location_openchurch_gallery',
                4 => 'comment_openchurch_gallery',
                5 => 'comment_preview_openchurch_gallery',
                6 => 'comment_subject_field_openchurch_gallery',
                7 => 'menu_options_openchurch_gallery',
                8 => 'menu_parent_openchurch_gallery',
                9 => 'node_options_openchurch_gallery',
                10 => 'node_preview_openchurch_gallery',
                11 => 'node_submitted_openchurch_gallery',
              ),
              'views_view' => 
              array (
                0 => 'openchurch_galleries',
                1 => 'openchurch_gallery_photos',
              ),
            ),
          ),
          'schema_version' => 0,
          'project' => 'openchurch',
          'version' => '7.x-1.11-beta8',
        ),
        'openchurch_video_demo_content' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/features/openchurch_video/openchurch_video_demo_content/openchurch_video_demo_content.module',
          'basename' => 'openchurch_video_demo_content.module',
          'name' => 'openchurch_video_demo_content',
          'info' => 
          array (
            'name' => 'Openchurch Video Demo Content',
            'description' => 'Sample videos for the Openchurch Video app',
            'core' => '7.x',
            'package' => 'Openchurch',
            'version' => '7.x-1.11-beta8',
            'project' => 'openchurch',
            'features' => 
            array (
              'content' => 
              array (
                0 => 'oc_video1',
                1 => 'oc_video2',
              ),
            ),
            'dependencies' => 
            array (
              0 => 'openchurch_video',
            ),
            'files' => 
            array (
              0 => 'openchurch_video_demo_content.install',
            ),
            'datestamp' => '1359936580',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'openchurch',
          'version' => '7.x-1.11-beta8',
        ),
        'openchurch_video' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/features/openchurch_video/openchurch_video.module',
          'basename' => 'openchurch_video.module',
          'name' => 'openchurch_video',
          'info' => 
          array (
            'name' => 'Openchurch Video',
            'description' => 'Adds 3rd party video content type and video page.',
            'core' => '7.x',
            'package' => 'Features',
            'php' => '5.2.4',
            'version' => '7.x-1.11-beta8',
            'project' => 'openchurch',
            'dependencies' => 
            array (
              0 => 'context',
              1 => 'context_breadcrumb_current_page',
              2 => 'features',
              3 => 'file_entity',
              4 => 'media',
              5 => 'media_vimeo',
              6 => 'media_youtube',
              7 => 'strongarm',
              8 => 'styles',
              9 => 'views',
            ),
            'features' => 
            array (
              'context' => 
              array (
                0 => 'openchurch-video-breadcrumbs',
              ),
              'ctools' => 
              array (
                0 => 'context:context:3',
                1 => 'strongarm:strongarm:1',
                2 => 'views:views_default:3.0',
              ),
              'field' => 
              array (
                0 => 'node-openchurch_video-body',
                1 => 'node-openchurch_video-field_oc_video',
              ),
              'node' => 
              array (
                0 => 'openchurch_video',
              ),
              'variable' => 
              array (
                0 => 'comment_anonymous_openchurch_video',
                1 => 'comment_default_mode_openchurch_video',
                2 => 'comment_default_per_page_openchurch_video',
                3 => 'comment_form_location_openchurch_video',
                4 => 'comment_openchurch_video',
                5 => 'comment_preview_openchurch_video',
                6 => 'comment_subject_field_openchurch_video',
                7 => 'menu_options_openchurch_video',
                8 => 'menu_parent_openchurch_video',
                9 => 'node_options_openchurch_video',
                10 => 'node_preview_openchurch_video',
                11 => 'node_submitted_openchurch_video',
              ),
              'views_view' => 
              array (
                0 => 'openchurch_video',
              ),
            ),
            'datestamp' => '1359936580',
          ),
          'schema_version' => 0,
          'project' => 'openchurch',
          'version' => '7.x-1.11-beta8',
        ),
        'openchurch_podcast_demo_content' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/features/openchurch_podcast/openchurch_podcast_demo_content/openchurch_podcast_demo_content.module',
          'basename' => 'openchurch_podcast_demo_content.module',
          'name' => 'openchurch_podcast_demo_content',
          'info' => 
          array (
            'name' => 'Openchurch Podcast Demo Content',
            'description' => 'Sample podcast content for the Openchurch Podcast app',
            'core' => '7.x',
            'package' => 'Openchurch',
            'php' => '5.2.4',
            'version' => '7.x-1.11-beta8',
            'project' => 'openchurch',
            'dependencies' => 
            array (
              0 => 'openchurch_podcast',
            ),
            'features' => 
            array (
              'content' => 
              array (
                0 => 'oc_podcast1',
                1 => 'oc_podcast2',
              ),
            ),
            'datestamp' => '1359936580',
          ),
          'schema_version' => 0,
          'project' => 'openchurch',
          'version' => '7.x-1.11-beta8',
        ),
        'openchurch_podcast' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/features/openchurch_podcast/openchurch_podcast.module',
          'basename' => 'openchurch_podcast.module',
          'name' => 'openchurch_podcast',
          'info' => 
          array (
            'name' => 'Openchurch Podcast',
            'description' => 'Podcasts can be sermons, lectures or other church-related audio files.',
            'core' => '7.x',
            'package' => 'Features',
            'php' => '5.2.4',
            'version' => '7.x-1.11-beta8',
            'project' => 'openchurch',
            'dependencies' => 
            array (
              0 => 'context',
              1 => 'context_breadcrumb_current_page',
              2 => 'ctools',
              3 => 'date',
              4 => 'features',
              5 => 'file',
              6 => 'menu',
              7 => 'rss_creator',
              8 => 'rss_date',
              9 => 'rss_enclosure',
              10 => 'strongarm',
              11 => 'views',
            ),
            'features' => 
            array (
              'context' => 
              array (
                0 => 'openchurch-podcasts-breadcrumbs',
              ),
              'ctools' => 
              array (
                0 => 'context:context:3',
                1 => 'strongarm:strongarm:1',
                2 => 'views:views_default:3.0',
              ),
              'field' => 
              array (
                0 => 'node-openchurch_podcast-body',
                1 => 'node-openchurch_podcast-field_oc_audio',
                2 => 'node-openchurch_podcast-field_oc_author',
                3 => 'node-openchurch_podcast-field_oc_date',
              ),
              'node' => 
              array (
                0 => 'openchurch_podcast',
              ),
              'variable' => 
              array (
                0 => 'comment_anonymous_openchurch_podcast',
                1 => 'comment_default_mode_openchurch_podcast',
                2 => 'comment_default_per_page_openchurch_podcast',
                3 => 'comment_form_location_openchurch_podcast',
                4 => 'comment_openchurch_podcast',
                5 => 'comment_preview_openchurch_podcast',
                6 => 'comment_subject_field_openchurch_podcast',
                7 => 'menu_options_openchurch_podcast',
                8 => 'menu_parent_openchurch_podcast',
                9 => 'node_options_openchurch_podcast',
                10 => 'node_preview_openchurch_podcast',
                11 => 'node_submitted_openchurch_podcast',
              ),
              'views_view' => 
              array (
                0 => 'openchurch_latest_podcast',
                1 => 'openchurch_podcasts',
              ),
            ),
            'datestamp' => '1359936580',
          ),
          'schema_version' => 0,
          'project' => 'openchurch',
          'version' => '7.x-1.11-beta8',
        ),
        'openchurch_simplenews' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/features/openchurch_simplenews/openchurch_simplenews.module',
          'basename' => 'openchurch_simplenews.module',
          'name' => 'openchurch_simplenews',
          'info' => 
          array (
            'name' => 'Openchurch Simplenews',
            'description' => 'Simplenews newsletter starter kit with signup block',
            'core' => '7.x',
            'package' => 'Features',
            'php' => '5.2.4',
            'version' => '7.x-1.11-beta8',
            'project' => 'openchurch',
            'dependencies' => 
            array (
              0 => 'context',
              1 => 'ctools',
              2 => 'features',
              3 => 'simplenews',
              4 => 'strongarm',
            ),
            'features' => 
            array (
              'context' => 
              array (
                0 => 'openchurch-simplenews',
              ),
              'ctools' => 
              array (
                0 => 'context:context:3',
                1 => 'strongarm:strongarm:1',
              ),
              'field' => 
              array (
                0 => 'node-simplenews-body',
                1 => 'node-simplenews-field_simplenews_term',
              ),
              'node' => 
              array (
                0 => 'simplenews',
              ),
              'taxonomy' => 
              array (
                0 => 'newsletter',
              ),
              'user_permission' => 
              array (
                0 => 'subscribe to newsletters',
              ),
              'variable' => 
              array (
                0 => 'comment_anonymous_simplenews',
                1 => 'comment_default_mode_simplenews',
                2 => 'comment_default_per_page_simplenews',
                3 => 'comment_form_location_simplenews',
                4 => 'comment_preview_simplenews',
                5 => 'comment_simplenews',
                6 => 'comment_subject_field_simplenews',
                7 => 'menu_options_simplenews',
                8 => 'menu_parent_simplenews',
                9 => 'node_options_simplenews',
                10 => 'node_preview_simplenews',
                11 => 'node_submitted_simplenews',
              ),
            ),
            'files' => 
            array (
              0 => 'openchurch_simplenews.install',
            ),
            'datestamp' => '1359936580',
          ),
          'schema_version' => 0,
          'project' => 'openchurch',
          'version' => '7.x-1.11-beta8',
        ),
        'openchurch_events_demo_content' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/features/openchurch_events/openchurch_events_demo_content/openchurch_events_demo_content.module',
          'basename' => 'openchurch_events_demo_content.module',
          'name' => 'openchurch_events_demo_content',
          'info' => 
          array (
            'name' => 'Openchurch Events Demo Content',
            'description' => 'Sample events for the Openchurch Events app',
            'core' => '7.x',
            'package' => 'Openchurch',
            'php' => '5.2.4',
            'version' => '7.x-1.11-beta8',
            'project' => 'openchurch',
            'dependencies' => 
            array (
              0 => 'openchurch_events',
            ),
            'features' => 
            array (
              'content' => 
              array (
                0 => 'oc_event1',
                1 => 'oc_event2',
              ),
            ),
            'datestamp' => '1359936580',
          ),
          'schema_version' => 0,
          'project' => 'openchurch',
          'version' => '7.x-1.11-beta8',
        ),
        'openchurch_events' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/features/openchurch_events/openchurch_events.module',
          'basename' => 'openchurch_events.module',
          'name' => 'openchurch_events',
          'info' => 
          array (
            'name' => 'Openchurch Events',
            'description' => 'Events can be church activities, special meetings, etc.',
            'core' => '7.x',
            'package' => 'Features',
            'php' => '5.2.4',
            'version' => '7.x-1.11-beta8',
            'project' => 'openchurch',
            'dependencies' => 
            array (
              0 => 'addressfield',
              1 => 'calendar',
              2 => 'context',
              3 => 'context_breadcrumb_current_page',
              4 => 'ctools',
              5 => 'date',
              6 => 'date_repeat_field',
              7 => 'features',
              8 => 'file',
              9 => 'link',
              10 => 'menu',
              11 => 'node_reference',
              12 => 'page_manager',
              13 => 'strongarm',
              14 => 'views',
            ),
            'datestamp' => '1359936580',
            'features' => 
            array (
              'context' => 
              array (
                0 => 'openchurch-events-breadcrumbs',
              ),
              'ctools' => 
              array (
                0 => 'context:context:3',
                1 => 'page_manager:pages_default:1',
                2 => 'strongarm:strongarm:1',
                3 => 'views:views_default:3.0',
              ),
              'field' => 
              array (
                0 => 'node-openchurch_event-body',
                1 => 'node-openchurch_event-field_oc_cost',
                2 => 'node-openchurch_event-field_oc_dates',
                3 => 'node-openchurch_event-field_oc_downloads',
                4 => 'node-openchurch_event-field_oc_location',
                5 => 'node-openchurch_event-field_oc_ministry',
                6 => 'node-openchurch_event-field_oc_url',
              ),
              'node' => 
              array (
                0 => 'openchurch_event',
              ),
              'variable' => 
              array (
                0 => 'comment_anonymous_openchurch_event',
                1 => 'comment_default_mode_openchurch_event',
                2 => 'comment_default_per_page_openchurch_event',
                3 => 'comment_form_location_openchurch_event',
                4 => 'comment_openchurch_event',
                5 => 'comment_preview_openchurch_event',
                6 => 'comment_subject_field_openchurch_event',
                7 => 'language_content_type_openchurch_event',
                8 => 'menu_options_openchurch_event',
                9 => 'menu_parent_openchurch_event',
                10 => 'node_options_openchurch_event',
                11 => 'node_preview_openchurch_event',
                12 => 'node_submitted_openchurch_event',
              ),
              'views_view' => 
              array (
                0 => 'openchurch_event_dates',
                1 => 'openchurch_event_thumb',
                2 => 'openchurch_events',
                3 => 'openchurch_events_calendar',
                4 => 'openchurch_upcoming_events',
              ),
            ),
          ),
          'schema_version' => '7000',
          'project' => 'openchurch',
          'version' => '7.x-1.11-beta8',
        ),
        'openchurch_giving_demo_content' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/features/openchurch_giving/openchurch_giving_demo_content/openchurch_giving_demo_content.module',
          'basename' => 'openchurch_giving_demo_content.module',
          'name' => 'openchurch_giving_demo_content',
          'info' => 
          array (
            'name' => 'Openchurch Giving Demo Content',
            'description' => 'Sample charity content for the Openchurch Giving app',
            'core' => '7.x',
            'package' => 'Openchurch',
            'php' => '5.2.4',
            'version' => '7.x-1.11-beta8',
            'project' => 'openchurch',
            'dependencies' => 
            array (
              0 => 'openchurch_giving',
            ),
            'features' => 
            array (
              'content' => 
              array (
                0 => 'oc_charity1',
              ),
            ),
            'datestamp' => '1359936580',
          ),
          'schema_version' => 0,
          'project' => 'openchurch',
          'version' => '7.x-1.11-beta8',
        ),
        'openchurch_giving' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/features/openchurch_giving/openchurch_giving.module',
          'basename' => 'openchurch_giving.module',
          'name' => 'openchurch_giving',
          'info' => 
          array (
            'name' => 'Openchurch Giving',
            'description' => 'Charities and online giving information',
            'core' => '7.x',
            'package' => 'Features',
            'php' => '5.2.4',
            'version' => '7.x-1.11-beta8',
            'project' => 'openchurch',
            'dependencies' => 
            array (
              0 => 'context',
              1 => 'context_breadcrumb_current_page',
              2 => 'ctools',
              3 => 'features',
              4 => 'image',
              5 => 'menu',
              6 => 'strongarm',
              7 => 'views',
            ),
            'features' => 
            array (
              'context' => 
              array (
                0 => 'openchurch-giving-breadcrumbs',
              ),
              'ctools' => 
              array (
                0 => 'context:context:3',
                1 => 'strongarm:strongarm:1',
                2 => 'views:views_default:3.0',
              ),
              'field' => 
              array (
                0 => 'node-openchurch_charity-body',
                1 => 'node-openchurch_charity-field_oc_image',
              ),
              'image' => 
              array (
                0 => 'oc_charity_thumb',
              ),
              'node' => 
              array (
                0 => 'openchurch_charity',
              ),
              'variable' => 
              array (
                0 => 'comment_anonymous_openchurch_charity',
                1 => 'comment_default_mode_openchurch_charity',
                2 => 'comment_default_per_page_openchurch_charity',
                3 => 'comment_form_location_openchurch_charity',
                4 => 'comment_openchurch_charity',
                5 => 'comment_preview_openchurch_charity',
                6 => 'comment_subject_field_openchurch_charity',
                7 => 'language_content_type_openchurch_charity',
                8 => 'menu_options_openchurch_charity',
                9 => 'menu_parent_openchurch_charity',
                10 => 'node_options_openchurch_charity',
                11 => 'node_preview_openchurch_charity',
                12 => 'node_submitted_openchurch_charity',
              ),
              'views_view' => 
              array (
                0 => 'openchurch_giving',
              ),
            ),
            'datestamp' => '1359936580',
          ),
          'schema_version' => 0,
          'project' => 'openchurch',
          'version' => '7.x-1.11-beta8',
        ),
        'openchurch_bulletin_demo_content' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/features/openchurch_bulletin/openchurch_bulletin_demo_content/openchurch_bulletin_demo_content.module',
          'basename' => 'openchurch_bulletin_demo_content.module',
          'name' => 'openchurch_bulletin_demo_content',
          'info' => 
          array (
            'name' => 'Openchurch Bulletin Demo Content',
            'description' => 'Sample bulletin content for the Openchurch Bulletin app',
            'core' => '7.x',
            'package' => 'Openchurch',
            'php' => '5.2.4',
            'version' => '7.x-1.11-beta8',
            'project' => 'openchurch',
            'dependencies' => 
            array (
              0 => 'openchurch_bulletin',
            ),
            'features' => 
            array (
              'content' => 
              array (
                0 => 'oc_bulletin1',
                1 => 'oc_bulletin2',
                2 => 'oc_bulletin3',
              ),
            ),
            'datestamp' => '1359936580',
          ),
          'schema_version' => 0,
          'project' => 'openchurch',
          'version' => '7.x-1.11-beta8',
        ),
        'openchurch_bulletin' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/features/openchurch_bulletin/openchurch_bulletin.module',
          'basename' => 'openchurch_bulletin.module',
          'name' => 'openchurch_bulletin',
          'info' => 
          array (
            'name' => 'Openchurch Bulletin',
            'description' => 'Electronic bulletin for viewing and download.',
            'core' => '7.x',
            'package' => 'Features',
            'php' => '5.2.4',
            'version' => '7.x-1.11-beta8',
            'project' => 'openchurch',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'date',
              2 => 'features',
              3 => 'file',
              4 => 'menu',
              5 => 'strongarm',
              6 => 'views',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'strongarm:strongarm:1',
                1 => 'views:views_default:3.0',
              ),
              'field' => 
              array (
                0 => 'node-openchurch_bulletin-body',
                1 => 'node-openchurch_bulletin-field_oc_bulletin_date',
                2 => 'node-openchurch_bulletin-field_oc_bulletin_file',
              ),
              'node' => 
              array (
                0 => 'openchurch_bulletin',
              ),
              'variable' => 
              array (
                0 => 'comment_anonymous_openchurch_bulletin',
                1 => 'comment_controls_openchurch_bulletin',
                2 => 'comment_default_mode_openchurch_bulletin',
                3 => 'comment_default_order_openchurch_bulletin',
                4 => 'comment_default_per_page_openchurch_bulletin',
                5 => 'comment_form_location_openchurch_bulletin',
                6 => 'comment_openchurch_bulletin',
                7 => 'comment_preview_openchurch_bulletin',
                8 => 'comment_subject_field_openchurch_bulletin',
                9 => 'menu_options_openchurch_bulletin',
                10 => 'menu_parent_openchurch_bulletin',
                11 => 'node_options_openchurch_bulletin',
                12 => 'node_preview_openchurch_bulletin',
                13 => 'node_submitted_openchurch_bulletin',
              ),
              'views_view' => 
              array (
                0 => 'openchurch_bulletins',
                1 => 'openchurch_latest_bulletin',
              ),
            ),
            'datestamp' => '1359936580',
          ),
          'schema_version' => 0,
          'project' => 'openchurch',
          'version' => '7.x-1.11-beta8',
        ),
        'openchurch_ministry_demo_content' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/features/openchurch_ministry/openchurch_ministry_demo_content/openchurch_ministry_demo_content.module',
          'basename' => 'openchurch_ministry_demo_content.module',
          'name' => 'openchurch_ministry_demo_content',
          'info' => 
          array (
            'name' => 'Openchurch Ministry Demo Content',
            'description' => 'Sample ministry content for the Openchurch Ministry app',
            'core' => '7.x',
            'package' => 'Openchurch',
            'php' => '5.2.4',
            'version' => '7.x-1.11-beta8',
            'project' => 'openchurch',
            'dependencies' => 
            array (
              0 => 'openchurch_ministry',
            ),
            'features' => 
            array (
              'content' => 
              array (
                0 => 'oc_ministry1',
                1 => 'oc_ministry2',
              ),
            ),
            'datestamp' => '1359936580',
          ),
          'schema_version' => 0,
          'project' => 'openchurch',
          'version' => '7.x-1.11-beta8',
        ),
        'openchurch_ministry' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/features/openchurch_ministry/openchurch_ministry.module',
          'basename' => 'openchurch_ministry.module',
          'name' => 'openchurch_ministry',
          'info' => 
          array (
            'name' => 'Openchurch Ministry',
            'description' => 'Ministry pages describe various church ministries that members want to know more about.',
            'core' => '7.x',
            'package' => 'Features',
            'php' => '5.2.4',
            'version' => '7.x-1.11-beta8',
            'project' => 'openchurch',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'features',
              2 => 'image',
              3 => 'menu',
              4 => 'page_manager',
              5 => 'strongarm',
              6 => 'views',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'page_manager:pages_default:1',
                1 => 'strongarm:strongarm:1',
                2 => 'views:views_default:3.0',
              ),
              'field' => 
              array (
                0 => 'node-openchurch_ministry-body',
                1 => 'node-openchurch_ministry-field_oc_downloads',
                2 => 'node-openchurch_ministry-field_oc_image',
                3 => 'node-openchurch_ministry-field_oc_thumb',
              ),
              'node' => 
              array (
                0 => 'openchurch_ministry',
              ),
              'page_manager_handlers' => 
              array (
                0 => 'node_view_panel_context_2',
              ),
              'variable' => 
              array (
                0 => 'comment_anonymous_openchurch_ministry',
                1 => 'comment_default_mode_openchurch_ministry',
                2 => 'comment_default_per_page_openchurch_ministry',
                3 => 'comment_form_location_openchurch_ministry',
                4 => 'comment_openchurch_ministry',
                5 => 'comment_preview_openchurch_ministry',
                6 => 'comment_subject_field_openchurch_ministry',
                7 => 'menu_options_openchurch_ministry',
                8 => 'menu_parent_openchurch_ministry',
                9 => 'node_options_openchurch_ministry',
                10 => 'node_preview_openchurch_ministry',
                11 => 'node_submitted_openchurch_ministry',
              ),
              'views_view' => 
              array (
                0 => 'openchurch_ministries',
                1 => 'openchurch_ministry_contacts',
              ),
            ),
            'datestamp' => '1359936580',
          ),
          'schema_version' => 0,
          'project' => 'openchurch',
          'version' => '7.x-1.11-beta8',
        ),
        'openchurch_homepage_rotator_demo_content' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/features/openchurch_homepage_rotator/openchurch_homepage_rotator_demo_content/openchurch_homepage_rotator_demo_content.module',
          'basename' => 'openchurch_homepage_rotator_demo_content.module',
          'name' => 'openchurch_homepage_rotator_demo_content',
          'info' => 
          array (
            'name' => 'Openchurch Homepage Rotator Demo Content',
            'description' => 'Sample rotator content for the Openchurch Homepage Rotator app',
            'core' => '7.x',
            'package' => 'Openchurch',
            'php' => '5.2.4',
            'version' => '7.x-1.11-beta8',
            'project' => 'openchurch',
            'dependencies' => 
            array (
              0 => 'openchurch_homepage_rotator',
            ),
            'features' => 
            array (
              'content' => 
              array (
                0 => 'oc_homepage_rotator1',
                1 => 'oc_homepage_rotator2',
              ),
            ),
            'datestamp' => '1359936580',
          ),
          'schema_version' => 0,
          'project' => 'openchurch',
          'version' => '7.x-1.11-beta8',
        ),
        'openchurch_homepage_rotator' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/features/openchurch_homepage_rotator/openchurch_homepage_rotator.module',
          'basename' => 'openchurch_homepage_rotator.module',
          'name' => 'openchurch_homepage_rotator',
          'info' => 
          array (
            'name' => 'Openchurch Homepage Rotator',
            'description' => 'Homepage promotional rotator',
            'core' => '7.x',
            'package' => 'Features',
            'php' => '5.2.4',
            'version' => '7.x-1.11-beta8',
            'project' => 'openchurch',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'fe_nodequeue',
              2 => 'features',
              3 => 'image',
              4 => 'link',
              5 => 'page_manager',
              6 => 'strongarm',
              7 => 'views',
              8 => 'views_slideshow',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'page_manager:pages_default:1',
                1 => 'strongarm:strongarm:1',
                2 => 'views:views_default:3.0',
              ),
              'fe_nodequeue' => 
              array (
                0 => 'openchurch_homepage_rotator',
              ),
              'features_api' => 
              array (
                0 => 'api:1',
              ),
              'field' => 
              array (
                0 => 'node-openchurch_homepage_rotator-field_oc_image',
                1 => 'node-openchurch_homepage_rotator-field_oc_link',
              ),
              'image' => 
              array (
                0 => 'oc_homepage_rotator',
              ),
              'node' => 
              array (
                0 => 'openchurch_homepage_rotator',
              ),
              'page_manager_pages' => 
              array (
                0 => 'openchurch_homepage',
              ),
              'variable' => 
              array (
                0 => 'comment_anonymous_openchurch_homepage_rotator',
                1 => 'comment_default_mode_openchurch_homepage_rotator',
                2 => 'comment_default_per_page_openchurch_homepage_rotator',
                3 => 'comment_form_location_openchurch_homepage_rotator',
                4 => 'comment_openchurch_homepage_rotator',
                5 => 'comment_preview_openchurch_homepage_rotator',
                6 => 'comment_subject_field_openchurch_homepage_rotator',
                7 => 'language_content_type_openchurch_homepage_rotator',
                8 => 'menu_options_openchurch_homepage_rotator',
                9 => 'menu_parent_openchurch_homepage_rotator',
                10 => 'node_options_openchurch_homepage_rotator',
                11 => 'node_preview_openchurch_homepage_rotator',
                12 => 'node_submitted_openchurch_homepage_rotator',
              ),
              'views_view' => 
              array (
                0 => 'openchurch_homepage_rotator',
              ),
            ),
            'datestamp' => '1359936580',
          ),
          'schema_version' => 0,
          'project' => 'openchurch',
          'version' => '7.x-1.11-beta8',
        ),
        'openchurch_social' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/features/openchurch_social/openchurch_social.module',
          'basename' => 'openchurch_social.module',
          'name' => 'openchurch_social',
          'info' => 
          array (
            'name' => 'Openchurch Social',
            'description' => 'Adds social icons to the site which allows visitors to share content',
            'core' => '7.x',
            'package' => 'Features',
            'version' => '7.x-1.11-beta8',
            'project' => 'openchurch',
            'dependencies' => 
            array (
              0 => 'context',
              1 => 'ctools',
              2 => 'sharethis',
              3 => 'strongarm',
            ),
            'features' => 
            array (
              'context' => 
              array (
                0 => 'openchurch-social',
              ),
              'ctools' => 
              array (
                0 => 'context:context:3',
                1 => 'strongarm:strongarm:1',
              ),
              'variable' => 
              array (
                0 => 'sharethis_button_option',
                1 => 'sharethis_location',
                2 => 'sharethis_node_option',
                3 => 'sharethis_option_extras',
                4 => 'sharethis_service_option',
                5 => 'sharethis_teaser_option',
                6 => 'sharethis_twitter_suffix',
                7 => 'sharethis_widget_option',
              ),
            ),
            'datestamp' => '1359936580',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'openchurch',
          'version' => '7.x-1.11-beta8',
        ),
        'lightbox2' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/lightbox2/lightbox2.module',
          'basename' => 'lightbox2.module',
          'name' => 'lightbox2',
          'info' => 
          array (
            'name' => 'Lightbox2',
            'description' => 'Enables Lightbox2 for Drupal',
            'core' => '7.x',
            'package' => 'User interface',
            'files' => 
            array (
              0 => 'lightbox2.install',
              1 => 'lightbox2.module',
              2 => 'lightbox2.formatter.inc',
              3 => 'lightbox2.admin.inc',
            ),
            'configure' => 'admin/config/user-interface/lightbox2',
            'version' => '7.x-1.0-beta1',
            'project' => 'lightbox2',
            'datestamp' => '1318819001',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '6003',
          'project' => 'lightbox2',
          'version' => '7.x-1.0-beta1',
        ),
        'media_youtube' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/media_youtube/media_youtube.module',
          'basename' => 'media_youtube.module',
          'name' => 'media_youtube',
          'info' => 
          array (
            'name' => 'Media: YouTube',
            'description' => 'Provides YouTube support to the Media module.',
            'package' => 'Media',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'media_youtube.module',
              1 => 'includes/MediaInternetYouTubeHandler.inc',
              2 => 'includes/MediaYouTubeStreamWrapper.inc',
              3 => 'includes/MediaYouTubeStyles.inc',
              4 => 'includes/media_youtube.formatters.inc',
              5 => 'includes/media_youtube.styles.inc',
              6 => 'includes/media_youtube.variables.inc',
            ),
            'dependencies' => 
            array (
              0 => 'media_internet',
            ),
            'version' => '7.x-1.0-beta3',
            'project' => 'media_youtube',
            'datestamp' => '1331655643',
            'php' => '5.2.4',
          ),
          'schema_version' => '7012',
          'project' => 'media_youtube',
          'version' => '7.x-1.0-beta3',
        ),
        'node_reference' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/references/node_reference/node_reference.module',
          'basename' => 'node_reference.module',
          'name' => 'node_reference',
          'info' => 
          array (
            'name' => 'Node Reference',
            'description' => 'Defines a field type for referencing one node from another.',
            'package' => 'Fields',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'field',
              1 => 'references',
              2 => 'options',
            ),
            'files' => 
            array (
              0 => 'node_reference.test',
            ),
            'version' => '7.x-2.1',
            'project' => 'references',
            'datestamp' => '1360265821',
            'php' => '5.2.4',
          ),
          'schema_version' => '7000',
          'project' => 'references',
          'version' => '7.x-2.1',
        ),
        'user_reference' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/references/user_reference/user_reference.module',
          'basename' => 'user_reference.module',
          'name' => 'user_reference',
          'info' => 
          array (
            'name' => 'User Reference',
            'description' => 'Defines a field type for referencing a user from a node.',
            'package' => 'Fields',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'field',
              1 => 'references',
              2 => 'options',
            ),
            'version' => '7.x-2.1',
            'project' => 'references',
            'datestamp' => '1360265821',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'references',
          'version' => '7.x-2.1',
        ),
        'references' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/references/references.module',
          'basename' => 'references.module',
          'name' => 'references',
          'info' => 
          array (
            'name' => 'References',
            'description' => 'Defines common base features for the various reference field types.',
            'package' => 'Fields',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'field',
              1 => 'options',
            ),
            'files' => 
            array (
              0 => 'views/references_handler_relationship.inc',
              1 => 'views/references_handler_argument.inc',
              2 => 'views/references_plugin_display.inc',
              3 => 'views/references_plugin_style.inc',
              4 => 'views/references_plugin_row_fields.inc',
            ),
            'version' => '7.x-2.1',
            'project' => 'references',
            'datestamp' => '1360265821',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'references',
          'version' => '7.x-2.1',
        ),
        'sharethis' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/sharethis/sharethis.module',
          'basename' => 'sharethis.module',
          'name' => 'sharethis',
          'info' => 
          array (
            'name' => 'ShareThis',
            'description' => 'Add the <a href="http://www.sharethis.com/">ShareThis</a> widget to nodes on your site.',
            'core' => '7.x',
            'package' => 'Sharing',
            'configure' => 'admin/config/services/sharethis',
            'files' => 
            array (
              0 => 'views/sharethis_handler_field_link.inc',
            ),
            'version' => '7.x-2.6',
            'project' => 'sharethis',
            'datestamp' => '1397215755',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7001',
          'project' => 'sharethis',
          'version' => '7.x-2.6',
        ),
        'context_ui' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/context/context_ui/context_ui.module',
          'basename' => 'context_ui.module',
          'name' => 'context_ui',
          'info' => 
          array (
            'name' => 'Context UI',
            'description' => 'Provides a simple UI for settings up a site structure using Context.',
            'dependencies' => 
            array (
              0 => 'context',
            ),
            'package' => 'Context',
            'core' => '7.x',
            'configure' => 'admin/structure/context',
            'files' => 
            array (
              0 => 'context.module',
              1 => 'tests/context_ui.test',
            ),
            'version' => '7.x-3.2',
            'project' => 'context',
            'datestamp' => '1390931314',
            'php' => '5.2.4',
          ),
          'schema_version' => '6004',
          'project' => 'context',
          'version' => '7.x-3.2',
        ),
        'context_layouts' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/context/context_layouts/context_layouts.module',
          'basename' => 'context_layouts.module',
          'name' => 'context_layouts',
          'info' => 
          array (
            'name' => 'Context layouts',
            'description' => 'Allow theme layer to provide multiple region layouts and integrate with context.',
            'dependencies' => 
            array (
              0 => 'context',
            ),
            'package' => 'Context',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'plugins/context_layouts_reaction_block.inc',
            ),
            'version' => '7.x-3.2',
            'project' => 'context',
            'datestamp' => '1390931314',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'context',
          'version' => '7.x-3.2',
        ),
        'context' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/context/context.module',
          'basename' => 'context.module',
          'name' => 'context',
          'info' => 
          array (
            'name' => 'Context',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'description' => 'Provide modules with a cache that lasts for a single page request.',
            'package' => 'Context',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'tests/context.test',
              1 => 'tests/context.conditions.test',
              2 => 'tests/context.reactions.test',
            ),
            'version' => '7.x-3.2',
            'project' => 'context',
            'datestamp' => '1390931314',
            'php' => '5.2.4',
          ),
          'schema_version' => '7000',
          'project' => 'context',
          'version' => '7.x-3.2',
        ),
        'page_title' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/page_title/page_title.module',
          'basename' => 'page_title.module',
          'name' => 'page_title',
          'info' => 
          array (
            'name' => 'Page Title',
            'description' => 'Enhanced control over the page title (in the &lt;head> tag).',
            'core' => '7.x',
            'package' => 'SEO',
            'dependencies' => 
            array (
              0 => 'token',
            ),
            'files' => 
            array (
              0 => 'page_title.module',
              1 => 'page_title.admin.inc',
              2 => 'page_title.tokens.inc',
              3 => 'page_title.test',
              4 => 'views/plugins/page_title_plugin_display_page_with_page_title.inc',
              5 => 'views_handler_field_node_page_title.inc',
            ),
            'configure' => 'admin/config/search/page-title',
            'version' => '7.x-2.7',
            'project' => 'page_title',
            'datestamp' => '1336556786',
            'php' => '5.2.4',
          ),
          'schema_version' => '7200',
          'project' => 'page_title',
          'version' => '7.x-2.7',
        ),
        'addressfield_example' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/addressfield/example/addressfield_example.module',
          'basename' => 'addressfield_example.module',
          'name' => 'addressfield_example',
          'info' => 
          array (
            'name' => 'Address Field Example',
            'description' => 'Example module for how to implement an addressfield format handler.',
            'core' => '7.x',
            'package' => 'Fields',
            'hidden' => true,
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'addressfield',
            ),
            'version' => '7.x-1.0-beta5',
            'project' => 'addressfield',
            'datestamp' => '1386309505',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'addressfield',
          'version' => '7.x-1.0-beta5',
        ),
        'addressfield' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/addressfield/addressfield.module',
          'basename' => 'addressfield.module',
          'name' => 'addressfield',
          'info' => 
          array (
            'name' => 'Address Field',
            'description' => 'Manage a flexible address field, implementing the xNAL standard.',
            'core' => '7.x',
            'package' => 'Fields',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'files' => 
            array (
              0 => 'addressfield.migrate.inc',
              1 => 'views/addressfield_views_handler_field_country.inc',
              2 => 'views/addressfield_views_handler_filter_country.inc',
            ),
            'version' => '7.x-1.0-beta5',
            'project' => 'addressfield',
            'datestamp' => '1386309505',
            'php' => '5.2.4',
          ),
          'schema_version' => '7000',
          'project' => 'addressfield',
          'version' => '7.x-1.0-beta5',
        ),
        'email' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/email/email.module',
          'basename' => 'email.module',
          'name' => 'email',
          'info' => 
          array (
            'name' => 'Email',
            'description' => 'Defines an email field type.',
            'core' => '7.x',
            'package' => 'Fields',
            'files' => 
            array (
              0 => 'email.migrate.inc',
            ),
            'version' => '7.x-1.3',
            'project' => 'email',
            'datestamp' => '1397134155',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'email',
          'version' => '7.x-1.3',
        ),
        'views_php' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/views_php/views_php.module',
          'basename' => 'views_php.module',
          'name' => 'views_php',
          'info' => 
          array (
            'name' => 'Views PHP',
            'description' => 'Allows the usage of PHP to construct a view.',
            'package' => 'Views',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'views',
            ),
            'files' => 
            array (
              0 => 'plugins/views/views_php_handler_area.inc',
              1 => 'plugins/views/views_php_handler_field.inc',
              2 => 'plugins/views/views_php_handler_filter.inc',
              3 => 'plugins/views/views_php_handler_sort.inc',
              4 => 'plugins/views/views_php_plugin_access.inc',
              5 => 'plugins/views/views_php_plugin_cache.inc',
              6 => 'plugins/views/views_php_plugin_pager.inc',
              7 => 'plugins/views/views_php_plugin_query.inc',
              8 => 'plugins/views/views_php_plugin_wrapper.inc',
            ),
            'version' => '7.x-1.0-alpha1+1-dev',
            'project' => 'views_php',
            'datestamp' => '1397878427',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'views_php',
          'version' => '7.x-1.0-alpha1+1-dev',
        ),
        'content_taxonomy' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/content_taxonomy/content_taxonomy.module',
          'basename' => 'content_taxonomy.module',
          'name' => 'content_taxonomy',
          'info' => 
          array (
            'name' => 'Content Taxonomy',
            'description' => 'Extends the Taxonomy Reference Fields',
            'core' => '7.x',
            'package' => 'Fields',
            'dependencies' => 
            array (
              0 => 'taxonomy',
            ),
            'version' => '7.x-1.0-beta2',
            'project' => 'content_taxonomy',
            'datestamp' => '1360767812',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'content_taxonomy',
          'version' => '7.x-1.0-beta2',
        ),
        'content_taxonomy_autocomplete' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/content_taxonomy/content_taxonomy_autocomplete.module',
          'basename' => 'content_taxonomy_autocomplete.module',
          'name' => 'content_taxonomy_autocomplete',
          'info' => 
          array (
            'name' => 'Content Taxonomy Autocomplete',
            'description' => 'Extends the Taxonomy Autocomplete Widget',
            'core' => '7.x',
            'package' => 'Fields',
            'dependencies' => 
            array (
              0 => 'content_taxonomy',
            ),
            'files' => 
            array (
              0 => 'includes/content_taxonomy_autocomplete_moderated_terms.inc',
            ),
            'version' => '7.x-1.0-beta2',
            'project' => 'content_taxonomy',
            'datestamp' => '1360767812',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'content_taxonomy',
          'version' => '7.x-1.0-beta2',
        ),
        'content_taxonomy_migrate' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/content_taxonomy/content_taxonomy_migrate.module',
          'basename' => 'content_taxonomy_migrate.module',
          'name' => 'content_taxonomy_migrate',
          'info' => 
          array (
            'name' => 'Content Taxonomy Migrate',
            'description' => 'Migration from Content Taxonomy to Term Reference Fields',
            'core' => '7.x',
            'package' => 'Fields',
            'dependencies' => 
            array (
              0 => 'taxonomy',
              1 => 'content_migrate',
            ),
            'version' => '7.x-1.0-beta2',
            'project' => 'content_taxonomy',
            'datestamp' => '1360767812',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'content_taxonomy',
          'version' => '7.x-1.0-beta2',
        ),
        'file_entity_test' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/media/file_entity/tests/file_entity_test.module',
          'basename' => 'file_entity_test.module',
          'name' => 'file_entity_test',
          'info' => 
          array (
            'name' => 'File Entity Test',
            'description' => 'Support module for File Entity tests.',
            'package' => 'Testing',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'file_entity',
            ),
            'hidden' => true,
            'version' => '7.x-1.4',
            'project' => 'media',
            'datestamp' => '1389219517',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'media',
          'version' => '7.x-1.4',
        ),
        'file_entity' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/media/file_entity/file_entity.module',
          'basename' => 'file_entity.module',
          'name' => 'file_entity',
          'info' => 
          array (
            'name' => 'File entity',
            'description' => 'Extends Drupal file entities to be fieldable and viewable.',
            'package' => 'Media',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'field',
              1 => 'ctools',
            ),
            'files' => 
            array (
              0 => 'file_entity.field.inc',
            ),
            'configure' => 'admin/config/media/file-types',
            'version' => '7.x-1.4',
            'project' => 'media',
            'datestamp' => '1389219517',
            'php' => '5.2.4',
          ),
          'schema_version' => '7101',
          'project' => 'media',
          'version' => '7.x-1.4',
        ),
        'media_internet' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/media/modules/media_internet/media_internet.module',
          'basename' => 'media_internet.module',
          'name' => 'media_internet',
          'info' => 
          array (
            'name' => 'Media Internet Sources',
            'description' => 'Provides an API for accessing media on various internet services',
            'package' => 'Media',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'media',
            ),
            'files' => 
            array (
              0 => 'media_internet.module',
            ),
            'version' => '7.x-1.4',
            'project' => 'media',
            'datestamp' => '1389219517',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'media',
          'version' => '7.x-1.4',
        ),
        'media' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/media/media.module',
          'basename' => 'media.module',
          'name' => 'media',
          'info' => 
          array (
            'name' => 'Media',
            'description' => 'Provides the core Media API',
            'package' => 'Media',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'file_entity',
              1 => 'image',
            ),
            'files' => 
            array (
              0 => 'includes/MediaReadOnlyStreamWrapper.inc',
              1 => 'test/media.types.test',
              2 => 'test/media.entity.test',
              3 => 'test/media.file.usage.test',
            ),
            'configure' => 'admin/config/media/browser',
            'version' => '7.x-1.4',
            'project' => 'media',
            'datestamp' => '1389219517',
            'php' => '5.2.4',
          ),
          'schema_version' => '7020',
          'project' => 'media',
          'version' => '7.x-1.4',
        ),
        'backup_migrate' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/backup_migrate/backup_migrate.module',
          'basename' => 'backup_migrate.module',
          'name' => 'backup_migrate',
          'info' => 
          array (
            'name' => 'Backup and Migrate',
            'description' => 'Backup or migrate the Drupal Database quickly and without unnecessary data.',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'backup_migrate.module',
              1 => 'backup_migrate.install',
              2 => 'includes/destinations.inc',
              3 => 'includes/profiles.inc',
              4 => 'includes/schedules.inc',
            ),
            'configure' => 'admin/config/system/backup_migrate',
            'version' => '7.x-2.8',
            'project' => 'backup_migrate',
            'datestamp' => '1383686305',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7205',
          'project' => 'backup_migrate',
          'version' => '7.x-2.8',
        ),
        'plupload' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/plupload/plupload.module',
          'basename' => 'plupload.module',
          'name' => 'plupload',
          'info' => 
          array (
            'name' => 'Plupload integration module',
            'description' => 'Provides a plupload element.',
            'files' => 
            array (
              0 => 'plupload.module',
            ),
            'core' => '7.x',
            'package' => 'Media',
            'version' => '7.x-1.6',
            'project' => 'plupload',
            'datestamp' => '1389617018',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'plupload',
          'version' => '7.x-1.6',
        ),
        'nodequeue_service' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/nodequeue/addons/nodequeue_service/nodequeue_service.module',
          'basename' => 'nodequeue_service.module',
          'name' => 'nodequeue_service',
          'info' => 
          array (
            'name' => 'Nodequeue Service',
            'description' => 'Provides a nodequeue service.',
            'package' => 'Nodequeue',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'services',
              1 => 'nodequeue',
            ),
            'files' => 
            array (
              0 => 'nodequeue_service.inc',
            ),
            'version' => '7.x-2.0-beta1',
            'project' => 'nodequeue',
            'datestamp' => '1316558104',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'nodequeue',
          'version' => '7.x-2.0-beta1',
        ),
        'smartqueue' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/nodequeue/smartqueue.module',
          'basename' => 'smartqueue.module',
          'name' => 'smartqueue',
          'info' => 
          array (
            'name' => 'Smartqueue taxonomy',
            'description' => 'Creates a node queue for each taxonomy vocabulary',
            'package' => 'Nodequeue',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'nodequeue',
              1 => 'taxonomy',
            ),
            'version' => '7.x-2.0-beta1',
            'project' => 'nodequeue',
            'datestamp' => '1316558104',
            'php' => '5.2.4',
          ),
          'schema_version' => '7001',
          'project' => 'nodequeue',
          'version' => '7.x-2.0-beta1',
        ),
        'nodequeue' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/nodequeue/nodequeue.module',
          'basename' => 'nodequeue.module',
          'name' => 'nodequeue',
          'info' => 
          array (
            'name' => 'Nodequeue',
            'description' => 'Create queues which can contain nodes in arbitrary order',
            'package' => 'Nodequeue',
            'core' => '7.x',
            'configure' => 'admin/structure/nodequeue/settings',
            'files' => 
            array (
              0 => 'includes/views/nodequeue.views.inc',
              1 => 'includes/nodequeue.actions.inc',
              2 => 'includes/views/nodequeue_handler_argument_subqueue_qid.inc',
              3 => 'includes/views/nodequeue_handler_field_all_queues.inc',
              4 => 'includes/views/nodequeue_handler_field_all_subqueues.inc',
              5 => 'includes/views/nodequeue_handler_field_links.inc',
              6 => 'includes/views/nodequeue_handler_field_queue_tab.inc',
              7 => 'includes/views/nodequeue_handler_filter_in_queue.inc',
              8 => 'includes/views/nodequeue_handler_relationship_nodequeue.inc',
            ),
            'version' => '7.x-2.0-beta1',
            'project' => 'nodequeue',
            'datestamp' => '1316558104',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7201',
          'project' => 'nodequeue',
          'version' => '7.x-2.0-beta1',
        ),
        'nodequeue_generate' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/nodequeue/nodequeue_generate.module',
          'basename' => 'nodequeue_generate.module',
          'name' => 'nodequeue_generate',
          'info' => 
          array (
            'name' => 'Nodequeue generate',
            'description' => 'Bulk assign nodes into queues for quickly populating a site.',
            'package' => 'Development',
            'dependencies' => 
            array (
              0 => 'nodequeue',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'nodequeue_generate.module',
            ),
            'version' => '7.x-2.0-beta1',
            'project' => 'nodequeue',
            'datestamp' => '1316558104',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'nodequeue',
          'version' => '7.x-2.0-beta1',
        ),
        'rss_category' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/rss_field_formatters/rss_category.module',
          'basename' => 'rss_category.module',
          'name' => 'rss_category',
          'info' => 
          array (
            'name' => 'RSS category',
            'description' => 'Provides an RSS category field formatter for taxonomy term reference fields.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'taxonomy',
            ),
            'files' => 
            array (
              0 => 'rss_category.module',
            ),
            'version' => '7.x-1.2',
            'project' => 'rss_field_formatters',
            'datestamp' => '1307725919',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'rss_field_formatters',
          'version' => '7.x-1.2',
        ),
        'rss_georss' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/rss_field_formatters/rss_georss.module',
          'basename' => 'rss_georss.module',
          'name' => 'rss_georss',
          'info' => 
          array (
            'name' => 'RSS GeoRSS',
            'description' => 'Provides a GeoRSS field formatter for geofields.',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'rss_georss.module',
            ),
            'version' => '7.x-1.2',
            'project' => 'rss_field_formatters',
            'datestamp' => '1307725919',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'rss_field_formatters',
          'version' => '7.x-1.2',
        ),
        'rss_creator' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/rss_field_formatters/rss_creator.module',
          'basename' => 'rss_creator.module',
          'name' => 'rss_creator',
          'info' => 
          array (
            'name' => 'RSS creator',
            'description' => 'Provides an RSS creator field formatter for text and user reference fields.',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'rss_creator.module',
            ),
            'version' => '7.x-1.2',
            'project' => 'rss_field_formatters',
            'datestamp' => '1307725919',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'rss_field_formatters',
          'version' => '7.x-1.2',
        ),
        'rss_date' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/rss_field_formatters/rss_date.module',
          'basename' => 'rss_date.module',
          'name' => 'rss_date',
          'info' => 
          array (
            'name' => 'RSS date',
            'description' => 'Provides an RSS date field formatter for date fields.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'date',
            ),
            'files' => 
            array (
              0 => 'rss_date.module',
            ),
            'version' => '7.x-1.2',
            'project' => 'rss_field_formatters',
            'datestamp' => '1307725919',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'rss_field_formatters',
          'version' => '7.x-1.2',
        ),
        'rss_enclosure' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/rss_field_formatters/rss_enclosure.module',
          'basename' => 'rss_enclosure.module',
          'name' => 'rss_enclosure',
          'info' => 
          array (
            'name' => 'RSS enclosure',
            'description' => 'Provides an RSS enclosure field formatter for file, image and media fields.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'file',
            ),
            'files' => 
            array (
              0 => 'rss_enclosure.module',
            ),
            'version' => '7.x-1.2',
            'project' => 'rss_field_formatters',
            'datestamp' => '1307725919',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'rss_field_formatters',
          'version' => '7.x-1.2',
        ),
        'uuid_services_example' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/uuid/uuid_services_example/uuid_services_example.module',
          'basename' => 'uuid_services_example.module',
          'name' => 'uuid_services_example',
          'info' => 
          array (
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'rest_server',
              1 => 'services',
              2 => 'uuid',
              3 => 'uuid_services',
            ),
            'description' => 'Example feature of a UUID service. Works well with the Deploy Example feature as a client.',
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'services:services:3',
              ),
              'services_endpoint' => 
              array (
                0 => 'uuid_services_example',
              ),
            ),
            'name' => 'UUID Services Example',
            'package' => 'Features',
            'php' => '5.2.4',
            'version' => '7.x-1.0-alpha3',
            'project' => 'uuid',
            'datestamp' => '1328017553',
          ),
          'schema_version' => 0,
          'project' => 'uuid',
          'version' => '7.x-1.0-alpha3',
        ),
        'uuid_services' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/uuid/uuid_services/uuid_services.module',
          'basename' => 'uuid_services.module',
          'name' => 'uuid_services',
          'info' => 
          array (
            'name' => 'UUID Services',
            'description' => 'Provides integration with the Services module, like exposing a UUID entity resource.',
            'core' => '7.x',
            'package' => 'Services - resources',
            'dependencies' => 
            array (
              0 => 'services',
              1 => 'uuid',
              2 => 'entity',
            ),
            'version' => '7.x-1.0-alpha3',
            'project' => 'uuid',
            'datestamp' => '1328017553',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'uuid',
          'version' => '7.x-1.0-alpha3',
        ),
        'uuid' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/uuid/uuid.module',
          'basename' => 'uuid.module',
          'name' => 'uuid',
          'info' => 
          array (
            'name' => 'Universally Unique ID',
            'description' => 'Extends the entity functionality and adds support for universally unique identifiers.',
            'core' => '7.x',
            'package' => 'UUID',
            'configure' => 'admin/config/system/uuid',
            'files' => 
            array (
              0 => 'uuid.test',
            ),
            'version' => '7.x-1.0-alpha3',
            'project' => 'uuid',
            'datestamp' => '1328017553',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7101',
          'project' => 'uuid',
          'version' => '7.x-1.0-alpha3',
        ),
        'imce' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/imce/imce.module',
          'basename' => 'imce.module',
          'name' => 'imce',
          'info' => 
          array (
            'name' => 'IMCE',
            'description' => 'An image/file uploader and browser supporting personal directories and user quota.',
            'core' => '7.x',
            'package' => 'Media',
            'configure' => 'admin/config/media/imce',
            'version' => '7.x-1.8',
            'project' => 'imce',
            'datestamp' => '1387302359',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7001',
          'project' => 'imce',
          'version' => '7.x-1.8',
        ),
        'pathauto' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/pathauto/pathauto.module',
          'basename' => 'pathauto.module',
          'name' => 'pathauto',
          'info' => 
          array (
            'name' => 'Pathauto',
            'description' => 'Provides a mechanism for modules to automatically generate aliases for the content they manage.',
            'dependencies' => 
            array (
              0 => 'path',
              1 => 'token',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'pathauto.test',
            ),
            'configure' => 'admin/config/search/path/patterns',
            'recommends' => 
            array (
              0 => 'redirect',
            ),
            'version' => '7.x-1.2',
            'project' => 'pathauto',
            'datestamp' => '1344525185',
            'php' => '5.2.4',
          ),
          'schema_version' => '7005',
          'project' => 'pathauto',
          'version' => '7.x-1.2',
        ),
        'fusion_labels' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/fusion_accelerator/fusion_labels/fusion_labels.module',
          'basename' => 'fusion_labels.module',
          'name' => 'fusion_labels',
          'info' => 
          array (
            'name' => 'Fusion labels',
            'description' => 'Toggle buttons are added for administrators to visualize regions and grids in a theme.',
            'core' => '7.x',
            'engine' => 'phptemplate',
            'package' => 'Fusion Accelerator',
            'files' => 
            array (
              0 => 'fusion_accelerator.module',
            ),
            'version' => '7.x-2.0-beta1',
            'project' => 'fusion_accelerator',
            'datestamp' => '1332518152',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'fusion_accelerator',
          'version' => '7.x-2.0-beta1',
        ),
        'fusion_responsive_ie' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/fusion_accelerator/fusion_responsive_ie/fusion_responsive_ie.module',
          'basename' => 'fusion_responsive_ie.module',
          'name' => 'fusion_responsive_ie',
          'info' => 
          array (
            'name' => 'Responsive layouts for IE 6-8',
            'description' => 'Provides simulated support for CSS media queries in Internet Explorer versions 6-8.',
            'core' => '7.x',
            'engine' => 'phptemplate',
            'package' => 'Fusion Accelerator',
            'dependencies' => 
            array (
              0 => 'libraries',
            ),
            'version' => '7.x-2.0-beta1',
            'project' => 'fusion_accelerator',
            'datestamp' => '1332518152',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'fusion_accelerator',
          'version' => '7.x-2.0-beta1',
        ),
        'fusion_apply_test' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/fusion_accelerator/fusion_apply/tests/fusion_apply_test/fusion_apply_test.module',
          'basename' => 'fusion_apply_test.module',
          'name' => 'fusion_apply_test',
          'info' => 
          array (
            'name' => 'Fusion Apply Testing',
            'description' => 'Applies skins and performs other tests for Fusion Apply.',
            'package' => 'Testing',
            'core' => '7.x',
            'hidden' => true,
            'dependencies' => 
            array (
              0 => 'fusion_apply',
            ),
            'version' => '7.x-2.0-beta1',
            'project' => 'fusion_accelerator',
            'datestamp' => '1332518152',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'fusion_accelerator',
          'version' => '7.x-2.0-beta1',
        ),
        'fusion_apply_ui_test' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/fusion_accelerator/fusion_apply/tests/fusion_apply_ui_test/fusion_apply_ui_test.module',
          'basename' => 'fusion_apply_ui_test.module',
          'name' => 'fusion_apply_ui_test',
          'info' => 
          array (
            'name' => 'Fusion Apply UI Testing',
            'description' => 'A test module used for testing Fusion Apply UI.',
            'package' => 'Testing',
            'core' => '7.x',
            'hidden' => true,
            'dependencies' => 
            array (
              0 => 'fusion_apply_ui',
            ),
            'version' => '7.x-2.0-beta1',
            'project' => 'fusion_accelerator',
            'datestamp' => '1332518152',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'fusion_accelerator',
          'version' => '7.x-2.0-beta1',
        ),
        'fusion_apply_test_incompatible' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/fusion_accelerator/fusion_apply/tests/fusion_apply_incompatible/fusion_apply_test_incompatible.module',
          'basename' => 'fusion_apply_test_incompatible.module',
          'name' => 'fusion_apply_test_incompatible',
          'info' => 
          array (
            'name' => 'Fusion Apply Incompatible Testing',
            'description' => 'A test module used for testing incompatible Fusion Apply API implementations.',
            'package' => 'Testing',
            'core' => '7.x',
            'hidden' => true,
            'dependencies' => 
            array (
              0 => 'fusion_apply',
            ),
            'version' => '7.x-2.0-beta1',
            'project' => 'fusion_accelerator',
            'datestamp' => '1332518152',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'fusion_accelerator',
          'version' => '7.x-2.0-beta1',
        ),
        'fusion_apply_ui' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/fusion_accelerator/fusion_apply/fusion_apply_ui.module',
          'basename' => 'fusion_apply_ui.module',
          'name' => 'fusion_apply_ui',
          'info' => 
          array (
            'name' => 'Apply skins UI',
            'description' => 'Administrative interface to edit skins for Drupal UI components.  Without this module, you cannot edit your skins or rules.',
            'package' => 'Fusion Accelerator',
            'core' => '7.x',
            'configure' => 'admin/appearance/fusion',
            'dependencies' => 
            array (
              0 => 'fusion_apply',
              1 => 'contextual',
            ),
            'files' => 
            array (
              0 => 'tests/fusion_apply_ui.test',
            ),
            'version' => '7.x-2.0-beta1',
            'project' => 'fusion_accelerator',
            'datestamp' => '1332518152',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'fusion_accelerator',
          'version' => '7.x-2.0-beta1',
        ),
        'fusion_apply_rules' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/fusion_accelerator/fusion_apply/fusion_apply_rules.module',
          'basename' => 'fusion_apply_rules.module',
          'name' => 'fusion_apply_rules',
          'info' => 
          array (
            'name' => 'Apply skins for pages and regions',
            'description' => 'Adds a new tab to the administrative interface to edit skins for pages and regions.',
            'package' => 'Fusion Accelerator',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'fusion_apply',
            ),
            'version' => '7.x-2.0-beta1',
            'project' => 'fusion_accelerator',
            'datestamp' => '1332518152',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'fusion_accelerator',
          'version' => '7.x-2.0-beta1',
        ),
        'fusion_apply' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/fusion_accelerator/fusion_apply/fusion_apply.module',
          'basename' => 'fusion_apply.module',
          'name' => 'fusion_apply',
          'info' => 
          array (
            'name' => 'Apply skins',
            'description' => 'Provides a way to define and skin Drupal UI components, such as blocks and menus.',
            'package' => 'Fusion Accelerator',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'tests/fusion_apply.test',
            ),
            'version' => '7.x-2.0-beta1',
            'project' => 'fusion_accelerator',
            'datestamp' => '1332518152',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7001',
          'project' => 'fusion_accelerator',
          'version' => '7.x-2.0-beta1',
        ),
        'fusion_accelerator' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/fusion_accelerator/fusion_accelerator.module',
          'basename' => 'fusion_accelerator.module',
          'name' => 'fusion_accelerator',
          'info' => 
          array (
            'name' => 'Fusion grid tools',
            'description' => 'Provides dynamic grid generation for responsive layouts.',
            'core' => '7.x',
            'engine' => 'phptemplate',
            'package' => 'Fusion Accelerator',
            'files' => 
            array (
              0 => 'fusion_accelerator.module',
            ),
            'version' => '7.x-2.0-beta1',
            'project' => 'fusion_accelerator',
            'datestamp' => '1332518152',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'fusion_accelerator',
          'version' => '7.x-2.0-beta1',
        ),
        'admin_menu_toolbar' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/admin_menu/admin_menu_toolbar/admin_menu_toolbar.module',
          'basename' => 'admin_menu_toolbar.module',
          'name' => 'admin_menu_toolbar',
          'info' => 
          array (
            'name' => 'Administration menu Toolbar style',
            'description' => 'A better Toolbar.',
            'package' => 'Administration',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'admin_menu',
            ),
            'version' => '7.x-3.0-rc4',
            'project' => 'admin_menu',
            'datestamp' => '1359651687',
            'php' => '5.2.4',
          ),
          'schema_version' => '6300',
          'project' => 'admin_menu',
          'version' => '7.x-3.0-rc4',
        ),
        'admin_devel' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/admin_menu/admin_devel/admin_devel.module',
          'basename' => 'admin_devel.module',
          'name' => 'admin_devel',
          'info' => 
          array (
            'name' => 'Administration Development tools',
            'description' => 'Administration and debugging functionality for developers and site builders.',
            'package' => 'Administration',
            'core' => '7.x',
            'scripts' => 
            array (
              0 => 'admin_devel.js',
            ),
            'version' => '7.x-3.0-rc4',
            'project' => 'admin_menu',
            'datestamp' => '1359651687',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'admin_menu',
          'version' => '7.x-3.0-rc4',
        ),
        'admin_menu' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/admin_menu/admin_menu.module',
          'basename' => 'admin_menu.module',
          'name' => 'admin_menu',
          'info' => 
          array (
            'name' => 'Administration menu',
            'description' => 'Provides a dropdown menu to most administrative tasks and other common destinations (to users with the proper permissions).',
            'package' => 'Administration',
            'core' => '7.x',
            'configure' => 'admin/config/administration/admin_menu',
            'dependencies' => 
            array (
              0 => 'system (>7.10)',
            ),
            'files' => 
            array (
              0 => 'tests/admin_menu.test',
            ),
            'version' => '7.x-3.0-rc4',
            'project' => 'admin_menu',
            'datestamp' => '1359651687',
            'php' => '5.2.4',
          ),
          'schema_version' => '7304',
          'project' => 'admin_menu',
          'version' => '7.x-3.0-rc4',
        ),
        'media_vimeo' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/media_vimeo/media_vimeo.module',
          'basename' => 'media_vimeo.module',
          'name' => 'media_vimeo',
          'info' => 
          array (
            'name' => 'Media: Vimeo',
            'description' => 'Provides Vimeo support to the Media module.',
            'package' => 'Media',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'media_vimeo.module',
              1 => 'includes/MediaInternetVimeoHandler.inc',
              2 => 'includes/MediaVimeoStreamWrapper.inc',
              3 => 'includes/MediaVimeoStyles.inc',
              4 => 'includes/media_vimeo.formatters.inc',
              5 => 'includes/media_vimeo.styles.inc',
              6 => 'includes/media_vimeo.variables.inc',
            ),
            'dependencies' => 
            array (
              0 => 'media_internet',
            ),
            'version' => '7.x-1.0-beta5',
            'project' => 'media_vimeo',
            'datestamp' => '1332792648',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'media_vimeo',
          'version' => '7.x-1.0-beta5',
        ),
        'context_breadcrumb_current_page' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/context_breadcrumb_current_page/context_breadcrumb_current_page.module',
          'basename' => 'context_breadcrumb_current_page.module',
          'name' => 'context_breadcrumb_current_page',
          'info' => 
          array (
            'core' => '7.x',
            'description' => 'Add Context Reaction that addes the current page to the end of breadcrumbs',
            'name' => 'Context Breadcrumb Current Page',
            'package' => 'Context',
            'version' => '7.x-1.0-beta2',
            'project' => 'context_breadcrumb_current_page',
            'datestamp' => '1313510215',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'context_breadcrumb_current_page',
          'version' => '7.x-1.0-beta2',
        ),
        'metatag_views' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/metatag/metatag_views/metatag_views.module',
          'basename' => 'metatag_views.module',
          'name' => 'metatag_views',
          'info' => 
          array (
            'name' => 'Metatag: Views',
            'description' => 'Provides Metatag integration within the Views interface.',
            'package' => 'SEO',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'metatag',
              1 => 'views',
            ),
            'files' => 
            array (
              0 => 'metatag_views_plugin_display_extender_metatags.inc',
            ),
            'version' => '7.x-1.0-beta9',
            'project' => 'metatag',
            'datestamp' => '1390103307',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'metatag',
          'version' => '7.x-1.0-beta9',
        ),
        'metatag_devel' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/metatag/metatag_devel/metatag_devel.module',
          'basename' => 'metatag_devel.module',
          'name' => 'metatag_devel',
          'info' => 
          array (
            'name' => 'Metatag:Devel',
            'description' => 'Provides development / debugging functionality for the Metatag module. Integrates with Devel Generate.',
            'package' => 'Development',
            'core' => '7.x',
            'tags' => 
            array (
              0 => 'developer',
            ),
            'dependencies' => 
            array (
              0 => 'metatag',
            ),
            'version' => '7.x-1.0-beta9',
            'project' => 'metatag',
            'datestamp' => '1390103307',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'metatag',
          'version' => '7.x-1.0-beta9',
        ),
        'metatag_context' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/metatag/metatag_context/metatag_context.module',
          'basename' => 'metatag_context.module',
          'name' => 'metatag_context',
          'info' => 
          array (
            'name' => 'Metatag: Context',
            'description' => 'Assigned Metatag using Context definitions, allowing them to be assigned by path and other criteria.',
            'package' => 'SEO',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'context',
              1 => 'metatag',
            ),
            'files' => 
            array (
              0 => 'metatag_context.test',
            ),
            'version' => '7.x-1.0-beta9',
            'project' => 'metatag',
            'datestamp' => '1390103307',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'metatag',
          'version' => '7.x-1.0-beta9',
        ),
        'metatag_ui' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/metatag/metatag_ui/metatag_ui.module',
          'basename' => 'metatag_ui.module',
          'name' => 'metatag_ui',
          'info' => 
          array (
            'name' => 'Meta tag UI',
            'description' => 'DEPRECATED admin interface for the Meta tag API, this functionality has be merged into the main module.',
            'package' => 'SEO',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'metatag',
              1 => 'ctools',
            ),
            'hidden' => true,
            'version' => '7.x-1.0-beta9',
            'project' => 'metatag',
            'datestamp' => '1390103307',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'metatag',
          'version' => '7.x-1.0-beta9',
        ),
        'metatag_dc' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/metatag/metatag_dc/metatag_dc.module',
          'basename' => 'metatag_dc.module',
          'name' => 'metatag_dc',
          'info' => 
          array (
            'name' => 'Metatag: Dublin Core',
            'description' => 'Provides the fifteen <a href="http://dublincore.org/documents/dces/">Dublin Core Metadata Element Set 1.1</a> meta tags from the <a href="http://dublincore.org/">Dublin Core Metadata Institute</a>.',
            'package' => 'SEO',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'metatag',
            ),
            'version' => '7.x-1.0-beta9',
            'project' => 'metatag',
            'datestamp' => '1390103307',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'metatag',
          'version' => '7.x-1.0-beta9',
        ),
        'metatag_panels' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/metatag/metatag_panels/metatag_panels.module',
          'basename' => 'metatag_panels.module',
          'name' => 'metatag_panels',
          'info' => 
          array (
            'name' => 'Metatag: Panels',
            'description' => 'Provides Metatag integration within the Panels interface.',
            'package' => 'SEO',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'metatag',
              2 => 'panels',
              3 => 'token',
            ),
            'version' => '7.x-1.0-beta9',
            'project' => 'metatag',
            'datestamp' => '1390103307',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'metatag',
          'version' => '7.x-1.0-beta9',
        ),
        'metatag_twitter_cards' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/metatag/metatag_twitter_cards/metatag_twitter_cards.module',
          'basename' => 'metatag_twitter_cards.module',
          'name' => 'metatag_twitter_cards',
          'info' => 
          array (
            'name' => 'Metatag: Twitter Cards',
            'description' => 'Provides support for Twitter\'s Card meta tags.',
            'package' => 'SEO',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'metatag',
            ),
            'version' => '7.x-1.0-beta9',
            'project' => 'metatag',
            'datestamp' => '1390103307',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'metatag',
          'version' => '7.x-1.0-beta9',
        ),
        'metatag_test' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/metatag/tests/metatag_test.module',
          'basename' => 'metatag_test.module',
          'name' => 'metatag_test',
          'info' => 
          array (
            'name' => 'Meta Tag Test',
            'description' => 'Testing module for metatag.module',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'metatag',
            ),
            'hidden' => true,
            'version' => '7.x-1.0-beta9',
            'project' => 'metatag',
            'datestamp' => '1390103307',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'metatag',
          'version' => '7.x-1.0-beta9',
        ),
        'metatag_opengraph' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/metatag/metatag_opengraph/metatag_opengraph.module',
          'basename' => 'metatag_opengraph.module',
          'name' => 'metatag_opengraph',
          'info' => 
          array (
            'name' => 'Metatag: Open Graph',
            'description' => 'Provides support for open graph meta tags.',
            'package' => 'SEO',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'metatag',
            ),
            'version' => '7.x-1.0-beta9',
            'project' => 'metatag',
            'datestamp' => '1390103307',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'metatag',
          'version' => '7.x-1.0-beta9',
        ),
        'metatag' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/metatag/metatag.module',
          'basename' => 'metatag.module',
          'name' => 'metatag',
          'info' => 
          array (
            'name' => 'Metatag',
            'description' => 'Adds support and an API to implement meta tags.',
            'package' => 'SEO',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'system (>=7.15)',
              1 => 'ctools',
              2 => 'token',
            ),
            'configure' => 'admin/config/search/metatags',
            'files' => 
            array (
              0 => 'metatag.inc',
              1 => 'metatag.migrate.inc',
              2 => 'metatag.test',
            ),
            'version' => '7.x-1.0-beta9',
            'project' => 'metatag',
            'datestamp' => '1390103307',
            'php' => '5.2.4',
          ),
          'schema_version' => '7022',
          'project' => 'metatag',
          'version' => '7.x-1.0-beta9',
        ),
        'date_repeat_field' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/date/date_repeat_field/date_repeat_field.module',
          'basename' => 'date_repeat_field.module',
          'name' => 'date_repeat_field',
          'info' => 
          array (
            'name' => 'Date Repeat Field',
            'description' => 'Creates the option of Repeating date fields and manages Date fields that use the Date Repeat API.',
            'dependencies' => 
            array (
              0 => 'date_api',
              1 => 'date',
              2 => 'date_repeat',
            ),
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'date_repeat_field.css',
              ),
            ),
            'package' => 'Date/Time',
            'core' => '7.x',
            'version' => '7.x-2.7',
            'project' => 'date',
            'datestamp' => '1387659206',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'date',
          'version' => '7.x-2.7',
        ),
        'date_all_day' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/date/date_all_day/date_all_day.module',
          'basename' => 'date_all_day.module',
          'name' => 'date_all_day',
          'info' => 
          array (
            'name' => 'Date All Day',
            'description' => 'Adds \'All Day\' functionality to date fields, including an \'All Day\' theme and \'All Day\' checkboxes for the Date select and Date popup widgets.',
            'dependencies' => 
            array (
              0 => 'date_api',
              1 => 'date',
            ),
            'package' => 'Date/Time',
            'core' => '7.x',
            'version' => '7.x-2.7',
            'project' => 'date',
            'datestamp' => '1387659206',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'date',
          'version' => '7.x-2.7',
        ),
        'date_context' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/date/date_context/date_context.module',
          'basename' => 'date_context.module',
          'name' => 'date_context',
          'info' => 
          array (
            'name' => 'Date Context',
            'description' => 'Adds an option to the Context module to set a context condition based on the value of a date field.',
            'package' => 'Date/Time',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'date',
              1 => 'context',
            ),
            'files' => 
            array (
              0 => 'date_context.module',
              1 => 'plugins/date_context_date_condition.inc',
            ),
            'version' => '7.x-2.7',
            'project' => 'date',
            'datestamp' => '1387659206',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'date',
          'version' => '7.x-2.7',
        ),
        'date_repeat' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/date/date_repeat/date_repeat.module',
          'basename' => 'date_repeat.module',
          'name' => 'date_repeat',
          'info' => 
          array (
            'name' => 'Date Repeat API',
            'description' => 'A Date Repeat API to calculate repeating dates and times from iCal rules.',
            'dependencies' => 
            array (
              0 => 'date_api',
            ),
            'package' => 'Date/Time',
            'core' => '7.x',
            'php' => '5.2',
            'files' => 
            array (
              0 => 'tests/date_repeat.test',
              1 => 'tests/date_repeat_form.test',
            ),
            'version' => '7.x-2.7',
            'project' => 'date',
            'datestamp' => '1387659206',
          ),
          'schema_version' => 0,
          'project' => 'date',
          'version' => '7.x-2.7',
        ),
        'date_tools' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/date/date_tools/date_tools.module',
          'basename' => 'date_tools.module',
          'name' => 'date_tools',
          'info' => 
          array (
            'name' => 'Date Tools',
            'description' => 'Tools to import and auto-create dates and calendars.',
            'dependencies' => 
            array (
              0 => 'date',
            ),
            'package' => 'Date/Time',
            'core' => '7.x',
            'configure' => 'admin/config/date/tools',
            'files' => 
            array (
              0 => 'tests/date_tools.test',
            ),
            'version' => '7.x-2.7',
            'project' => 'date',
            'datestamp' => '1387659206',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'date',
          'version' => '7.x-2.7',
        ),
        'date_api' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/date/date_api/date_api.module',
          'basename' => 'date_api.module',
          'name' => 'date_api',
          'info' => 
          array (
            'name' => 'Date API',
            'description' => 'A Date API that can be used by other modules.',
            'package' => 'Date/Time',
            'core' => '7.x',
            'php' => '5.2',
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'date.css',
              ),
            ),
            'files' => 
            array (
              0 => 'date_api.module',
              1 => 'date_api_sql.inc',
            ),
            'version' => '7.x-2.7',
            'project' => 'date',
            'datestamp' => '1387659206',
            'dependencies' => 
            array (
            ),
          ),
          'schema_version' => '7001',
          'project' => 'date',
          'version' => '7.x-2.7',
        ),
        'date_migrate_example' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/date/date_migrate/date_migrate_example/date_migrate_example.module',
          'basename' => 'date_migrate_example.module',
          'name' => 'date_migrate_example',
          'info' => 
          array (
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'date',
              1 => 'date_repeat',
              2 => 'date_repeat_field',
              3 => 'features',
              4 => 'migrate',
            ),
            'description' => 'Examples of migrating with the Date module',
            'features' => 
            array (
              'field' => 
              array (
                0 => 'node-date_migrate_example-body',
                1 => 'node-date_migrate_example-field_date',
                2 => 'node-date_migrate_example-field_date_range',
                3 => 'node-date_migrate_example-field_date_repeat',
                4 => 'node-date_migrate_example-field_datestamp',
                5 => 'node-date_migrate_example-field_datestamp_range',
                6 => 'node-date_migrate_example-field_datetime',
                7 => 'node-date_migrate_example-field_datetime_range',
              ),
              'node' => 
              array (
                0 => 'date_migrate_example',
              ),
            ),
            'files' => 
            array (
              0 => 'date_migrate_example.migrate.inc',
            ),
            'name' => 'Date Migration Example',
            'package' => 'Features',
            'project' => 'date',
            'version' => '7.x-2.7',
            'datestamp' => '1387659206',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'date',
          'version' => '7.x-2.7',
        ),
        'date_migrate' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/date/date_migrate/date_migrate.module',
          'basename' => 'date_migrate.module',
          'name' => 'date_migrate',
          'info' => 
          array (
            'name' => 'Date Migration',
            'description' => 'Obsolete data migration module. Disable if no other modules depend on it.',
            'core' => '7.x',
            'package' => 'Date/Time',
            'hidden' => true,
            'version' => '7.x-2.7',
            'project' => 'date',
            'datestamp' => '1387659206',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'date',
          'version' => '7.x-2.7',
        ),
        'date_popup' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/date/date_popup/date_popup.module',
          'basename' => 'date_popup.module',
          'name' => 'date_popup',
          'info' => 
          array (
            'name' => 'Date Popup',
            'description' => 'Enables jquery popup calendars and time entry widgets for selecting dates and times.',
            'dependencies' => 
            array (
              0 => 'date_api',
            ),
            'package' => 'Date/Time',
            'core' => '7.x',
            'configure' => 'admin/config/date/date_popup',
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'themes/datepicker.1.7.css',
              ),
            ),
            'version' => '7.x-2.7',
            'project' => 'date',
            'datestamp' => '1387659206',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'date',
          'version' => '7.x-2.7',
        ),
        'date_views' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/date/date_views/date_views.module',
          'basename' => 'date_views.module',
          'name' => 'date_views',
          'info' => 
          array (
            'name' => 'Date Views',
            'description' => 'Views integration for date fields and date functionality.',
            'package' => 'Date/Time',
            'dependencies' => 
            array (
              0 => 'date_api',
              1 => 'views',
            ),
            'core' => '7.x',
            'php' => '5.2',
            'files' => 
            array (
              0 => 'includes/date_views_argument_handler.inc',
              1 => 'includes/date_views_argument_handler_simple.inc',
              2 => 'includes/date_views_filter_handler.inc',
              3 => 'includes/date_views_filter_handler_simple.inc',
              4 => 'includes/date_views.views.inc',
              5 => 'includes/date_views_plugin_pager.inc',
            ),
            'version' => '7.x-2.7',
            'project' => 'date',
            'datestamp' => '1387659206',
          ),
          'schema_version' => 0,
          'project' => 'date',
          'version' => '7.x-2.7',
        ),
        'date' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/date/date.module',
          'basename' => 'date.module',
          'name' => 'date',
          'info' => 
          array (
            'name' => 'Date',
            'description' => 'Makes date/time fields available.',
            'dependencies' => 
            array (
              0 => 'date_api',
            ),
            'package' => 'Date/Time',
            'core' => '7.x',
            'php' => '5.2',
            'files' => 
            array (
              0 => 'date.migrate.inc',
              1 => 'tests/date_api.test',
              2 => 'tests/date.test',
              3 => 'tests/date_field.test',
              4 => 'tests/date_migrate.test',
              5 => 'tests/date_validation.test',
              6 => 'tests/date_timezone.test',
            ),
            'version' => '7.x-2.7',
            'project' => 'date',
            'datestamp' => '1387659206',
          ),
          'schema_version' => '7004',
          'project' => 'date',
          'version' => '7.x-2.7',
        ),
        'wysiwyg_test' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/wysiwyg/tests/wysiwyg_test.module',
          'basename' => 'wysiwyg_test.module',
          'name' => 'wysiwyg_test',
          'info' => 
          array (
            'name' => 'Wysiwyg testing',
            'description' => 'Tests Wysiwyg module functionality. Do not enable.',
            'core' => '7.x',
            'package' => 'Testing',
            'hidden' => true,
            'dependencies' => 
            array (
              0 => 'wysiwyg',
            ),
            'files' => 
            array (
              0 => 'wysiwyg_test.module',
            ),
            'version' => '7.x-2.2',
            'project' => 'wysiwyg',
            'datestamp' => '1349213776',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'wysiwyg',
          'version' => '7.x-2.2',
        ),
        'wysiwyg' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/wysiwyg/wysiwyg.module',
          'basename' => 'wysiwyg.module',
          'name' => 'wysiwyg',
          'info' => 
          array (
            'name' => 'Wysiwyg',
            'description' => 'Allows to edit content with client-side editors.',
            'package' => 'User interface',
            'core' => '7.x',
            'configure' => 'admin/config/content/wysiwyg',
            'files' => 
            array (
              0 => 'wysiwyg.module',
              1 => 'tests/wysiwyg.test',
            ),
            'version' => '7.x-2.2',
            'project' => 'wysiwyg',
            'datestamp' => '1349213776',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7200',
          'project' => 'wysiwyg',
          'version' => '7.x-2.2',
        ),
        'rules_admin' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/rules/rules_admin/rules_admin.module',
          'basename' => 'rules_admin.module',
          'name' => 'rules_admin',
          'info' => 
          array (
            'name' => 'Rules UI',
            'description' => 'Administrative interface for managing rules.',
            'package' => 'Rules',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'rules_admin.module',
              1 => 'rules_admin.inc',
            ),
            'dependencies' => 
            array (
              0 => 'rules',
            ),
            'version' => '7.x-2.3',
            'project' => 'rules',
            'datestamp' => '1364401818',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'rules',
          'version' => '7.x-2.3',
        ),
        'rules_i18n' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/rules/rules_i18n/rules_i18n.module',
          'basename' => 'rules_i18n.module',
          'name' => 'rules_i18n',
          'info' => 
          array (
            'name' => 'Rules translation',
            'description' => 'Allows translating rules.',
            'dependencies' => 
            array (
              0 => 'rules',
              1 => 'i18n_string',
            ),
            'package' => 'Multilingual - Internationalization',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'rules_i18n.i18n.inc',
              1 => 'rules_i18n.rules.inc',
              2 => 'rules_i18n.test',
            ),
            'version' => '7.x-2.3',
            'project' => 'rules',
            'datestamp' => '1364401818',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'rules',
          'version' => '7.x-2.3',
        ),
        'rules_test' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/rules/tests/rules_test.module',
          'basename' => 'rules_test.module',
          'name' => 'rules_test',
          'info' => 
          array (
            'name' => 'Rules Tests',
            'description' => 'Support module for the Rules tests.',
            'package' => 'Testing',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'rules_test.rules.inc',
              1 => 'rules_test.rules_defaults.inc',
            ),
            'hidden' => true,
            'version' => '7.x-2.3',
            'project' => 'rules',
            'datestamp' => '1364401818',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'rules',
          'version' => '7.x-2.3',
        ),
        'rules_scheduler' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/rules/rules_scheduler/rules_scheduler.module',
          'basename' => 'rules_scheduler.module',
          'name' => 'rules_scheduler',
          'info' => 
          array (
            'name' => 'Rules Scheduler',
            'description' => 'Schedule the execution of Rules components using actions.',
            'dependencies' => 
            array (
              0 => 'rules',
            ),
            'package' => 'Rules',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'rules_scheduler.admin.inc',
              1 => 'rules_scheduler.module',
              2 => 'rules_scheduler.install',
              3 => 'rules_scheduler.rules.inc',
              4 => 'rules_scheduler.test',
              5 => 'includes/rules_scheduler.views_default.inc',
              6 => 'includes/rules_scheduler.views.inc',
              7 => 'includes/rules_scheduler_views_filter.inc',
            ),
            'version' => '7.x-2.3',
            'project' => 'rules',
            'datestamp' => '1364401818',
            'php' => '5.2.4',
          ),
          'schema_version' => '7202',
          'project' => 'rules',
          'version' => '7.x-2.3',
        ),
        'rules' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/rules/rules.module',
          'basename' => 'rules.module',
          'name' => 'rules',
          'info' => 
          array (
            'name' => 'Rules',
            'description' => 'React on events and conditionally evaluate actions.',
            'package' => 'Rules',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'rules.features.inc',
              1 => 'tests/rules.test',
              2 => 'includes/faces.inc',
              3 => 'includes/rules.core.inc',
              4 => 'includes/rules.processor.inc',
              5 => 'includes/rules.plugins.inc',
              6 => 'includes/rules.state.inc',
              7 => 'modules/php.eval.inc',
              8 => 'modules/rules_core.eval.inc',
              9 => 'modules/system.eval.inc',
              10 => 'ui/ui.controller.inc',
              11 => 'ui/ui.core.inc',
              12 => 'ui/ui.data.inc',
              13 => 'ui/ui.plugins.inc',
            ),
            'dependencies' => 
            array (
              0 => 'entity_token',
              1 => 'entity',
            ),
            'version' => '7.x-2.3',
            'project' => 'rules',
            'datestamp' => '1364401818',
            'php' => '5.2.4',
          ),
          'schema_version' => '7209',
          'project' => 'rules',
          'version' => '7.x-2.3',
        ),
        'content_migrate' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/cck/modules/content_migrate/content_migrate.module',
          'basename' => 'content_migrate.module',
          'name' => 'content_migrate',
          'info' => 
          array (
            'name' => 'Content Migrate',
            'description' => 'Migrate fields and field data from CCK D6 format to the D7 field format. Required to migrate data, can be disabled once all fields have been migrated.',
            'core' => '7.x',
            'package' => 'CCK',
            'files' => 
            array (
              0 => 'content_migrate.module',
              1 => 'content_migrate.api.php',
              2 => 'includes/content_migrate.admin.inc',
              3 => 'includes/content_migrate.values.inc',
              4 => 'includes/content_migrate.drush.inc',
              5 => 'modules/content_migrate.text.inc',
              6 => 'modules/content_migrate.number.inc',
              7 => 'modules/content_migrate.optionwidgets.inc',
              8 => 'modules/content_migrate.filefield.inc',
              9 => 'tests/content_migrate.test',
            ),
            'version' => '7.x-3.0-alpha3',
            'project' => 'cck',
            'datestamp' => '1386880109',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'cck',
          'version' => '7.x-3.0-alpha3',
        ),
        'cck' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/cck/cck.module',
          'basename' => 'cck.module',
          'name' => 'cck',
          'info' => 
          array (
            'name' => 'CCK',
            'description' => 'Miscellaneous field functions not handled by core.',
            'package' => 'CCK',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'cck.module',
              1 => 'cck.install',
            ),
            'dependencies' => 
            array (
              0 => 'field_ui',
            ),
            'version' => '7.x-3.0-alpha3',
            'project' => 'cck',
            'datestamp' => '1386880109',
            'php' => '5.2.4',
          ),
          'schema_version' => '7000',
          'project' => 'cck',
          'version' => '7.x-3.0-alpha3',
        ),
        'apps' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/apps/apps.module',
          'basename' => 'apps.module',
          'name' => 'apps',
          'info' => 
          array (
            'name' => 'Apps',
            'description' => 'Provides Interface for Install Apps from A drupal app server',
            'package' => 'Distribution Management',
            'version' => '7.x-1.0-beta7',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'update',
            ),
            'files' => 
            array (
              0 => 'apps.module',
              1 => 'apps.updater.inc',
              2 => 'apps.installer.inc',
              3 => 'apps.test',
            ),
            'project' => 'apps',
            'datestamp' => '1345171003',
            'php' => '5.2.4',
          ),
          'schema_version' => '7001',
          'project' => 'apps',
          'version' => '7.x-1.0-beta7',
        ),
        'styles_ui' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/styles/contrib/styles_ui/styles_ui.module',
          'basename' => 'styles_ui.module',
          'name' => 'styles_ui',
          'info' => 
          array (
            'name' => 'Styles UI',
            'description' => 'Allows administration of the Styles modules.',
            'package' => 'Styles',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'styles_ui.admin.inc',
            ),
            'dependencies' => 
            array (
              0 => 'styles',
            ),
            'version' => '7.x-2.0-alpha8',
            'project' => 'styles',
            'datestamp' => '1306964517',
            'php' => '5.2.4',
          ),
          'schema_version' => '7206',
          'project' => 'styles',
          'version' => '7.x-2.0-alpha8',
        ),
        'file_styles' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/styles/contrib/file_styles/file_styles.module',
          'basename' => 'file_styles.module',
          'name' => 'file_styles',
          'info' => 
          array (
            'name' => 'File Styles',
            'description' => 'Allows preset transformation of files and media for display.',
            'package' => 'Styles',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'file_styles.module',
              1 => 'file_styles.admin.inc',
              2 => 'includes/styles/FileStyles.inc',
            ),
            'dependencies' => 
            array (
              0 => 'styles',
              1 => 'image',
            ),
            'version' => '7.x-2.0-alpha8',
            'project' => 'styles',
            'datestamp' => '1306964517',
            'php' => '5.2.4',
          ),
          'schema_version' => '7210',
          'project' => 'styles',
          'version' => '7.x-2.0-alpha8',
        ),
        'styles' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/styles/styles.module',
          'basename' => 'styles.module',
          'name' => 'styles',
          'info' => 
          array (
            'name' => 'Styles',
            'description' => 'Bundles similar display formatters together.',
            'package' => 'Styles',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'styles.module',
              1 => 'includes/Styles.inc',
            ),
            'version' => '7.x-2.0-alpha8',
            'project' => 'styles',
            'datestamp' => '1306964517',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7215',
          'project' => 'styles',
          'version' => '7.x-2.0-alpha8',
        ),
        'webform' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/webform/webform.module',
          'basename' => 'webform.module',
          'name' => 'webform',
          'info' => 
          array (
            'name' => 'Webform',
            'description' => 'Enables the creation of forms and questionnaires.',
            'core' => '7.x',
            'package' => 'Webform',
            'configure' => 'admin/config/content/webform',
            'files' => 
            array (
              0 => 'includes/webform.export.inc',
              1 => 'views/webform_handler_field_form_body.inc',
              2 => 'views/webform_handler_field_is_draft.inc',
              3 => 'views/webform_handler_field_node_link_edit.inc',
              4 => 'views/webform_handler_field_node_link_results.inc',
              5 => 'views/webform_handler_field_submission_count.inc',
              6 => 'views/webform_handler_field_submission_link.inc',
              7 => 'views/webform_handler_field_webform_status.inc',
              8 => 'views/webform_handler_filter_is_draft.inc',
              9 => 'views/webform_handler_filter_webform_status.inc',
              10 => 'views/webform.views.inc',
              11 => 'tests/components.test',
              12 => 'tests/permissions.test',
              13 => 'tests/submission.test',
              14 => 'tests/webform.test',
            ),
            'version' => '7.x-3.20',
            'project' => 'webform',
            'datestamp' => '1392182305',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7321',
          'project' => 'webform',
          'version' => '7.x-3.20',
        ),
        'menu_breadcrumb' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/menu_breadcrumb/menu_breadcrumb.module',
          'basename' => 'menu_breadcrumb.module',
          'name' => 'menu_breadcrumb',
          'info' => 
          array (
            'name' => 'Menu breadcrumb',
            'description' => 'Allows you to use the menu the current page belongs to for the breadcrumb.',
            'dependencies' => 
            array (
              0 => 'menu',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'menu_breadcrumb.install',
            ),
            'configure' => 'admin/config/user-interface/menu-breadcrumb',
            'version' => '7.x-1.5',
            'project' => 'menu_breadcrumb',
            'datestamp' => '1381202820',
            'php' => '5.2.4',
          ),
          'schema_version' => '6100',
          'project' => 'menu_breadcrumb',
          'version' => '7.x-1.5',
        ),
        'calendar' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/calendar/calendar.module',
          'basename' => 'calendar.module',
          'name' => 'calendar',
          'info' => 
          array (
            'name' => 'Calendar',
            'description' => 'Views plugin to display views containing dates as Calendars.',
            'dependencies' => 
            array (
              0 => 'views',
              1 => 'date_api',
              2 => 'date_views',
            ),
            'package' => 'Date/Time',
            'core' => '7.x',
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'css/calendar_multiday.css',
              ),
            ),
            'files' => 
            array (
              0 => 'calendar.install',
              1 => 'calendar.module',
              2 => 'includes/calendar.views.inc',
              3 => 'includes/calendar_plugin_style.inc',
              4 => 'includes/calendar_plugin_row.inc',
              5 => 'includes/calendar.views_template.inc',
              6 => 'theme/theme.inc',
              7 => 'theme/calendar-style.tpl.php',
            ),
            'version' => '7.x-3.4',
            'project' => 'calendar',
            'datestamp' => '1337429753',
            'php' => '5.2.4',
          ),
          'schema_version' => '7002',
          'project' => 'calendar',
          'version' => '7.x-3.4',
        ),
        'admin' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/admin/admin.module',
          'basename' => 'admin.module',
          'name' => 'admin',
          'info' => 
          array (
            'name' => 'Admin',
            'description' => 'UI helpers for Drupal admins and managers.',
            'package' => 'Administration',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'admin.admin.inc',
              1 => 'admin.install',
              2 => 'admin.module',
              3 => 'includes/admin.devel.inc',
              4 => 'includes/admin.theme.inc',
              5 => 'theme/admin-panes.tpl.php',
              6 => 'theme/admin-toolbar.tpl.php',
              7 => 'theme/theme.inc',
            ),
            'version' => '7.x-2.0-beta3',
            'project' => 'admin',
            'datestamp' => '1292541646',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'admin',
          'version' => '7.x-2.0-beta3',
        ),
        'imce_wysiwyg' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/imce_wysiwyg/imce_wysiwyg.module',
          'basename' => 'imce_wysiwyg.module',
          'name' => 'imce_wysiwyg',
          'info' => 
          array (
            'name' => 'IMCE Wysiwyg API bridge',
            'description' => 'Makes IMCE available as plugin for client-side editors integrated via Wysiwyg API.',
            'package' => 'User interface',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'imce',
              1 => 'wysiwyg',
            ),
            'version' => '7.x-1.0',
            'project' => 'imce_wysiwyg',
            'datestamp' => '1317851503',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'imce_wysiwyg',
          'version' => '7.x-1.0',
        ),
        'fontyourface_ui' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/fontyourface/modules/fontyourface_ui/fontyourface_ui.module',
          'basename' => 'fontyourface_ui.module',
          'name' => 'fontyourface_ui',
          'info' => 
          array (
            'name' => '@font-your-face UI',
            'description' => 'Administrative interface for managing fonts.',
            'package' => '@font-your-face',
            'dependencies' => 
            array (
              0 => 'fontyourface',
              1 => 'views',
            ),
            'configure' => 'admin/config/user-interface/fontyourface',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'views/fontyourface.views_default.inc',
              1 => 'views/views_handler_field_fontyourface_font.inc',
              2 => 'views/views_handler_field_fontyourface_foundry.inc',
              3 => 'views/views_handler_field_fontyourface_license.inc',
              4 => 'views/views_handler_field_fontyourface_provider.inc',
              5 => 'views/views_handler_field_fontyourface_tag_font_tid.inc',
              6 => 'views/views_handler_filter_tag_font_tid.inc',
              7 => 'views/views_handler_relationship_fontyourface_tag.inc',
              8 => 'views/views_handler_field_fontyourface_preview.inc',
              9 => 'views/views_handler_field_fontyourface_enable_disable.inc',
              10 => 'views/views_handler_field_fontyourface_enabled_yes_no.inc',
              11 => 'views/views_handler_filter_fontyourface_provider.inc',
              12 => 'views/views_handler_filter_fontyourface_foundry.inc',
            ),
            'version' => '7.x-2.8',
            'project' => 'fontyourface',
            'datestamp' => '1367195415',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'fontyourface',
          'version' => '7.x-2.8',
        ),
        'fontsquirrel' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/fontyourface/modules/fontsquirrel/fontsquirrel.module',
          'basename' => 'fontsquirrel.module',
          'name' => 'fontsquirrel',
          'info' => 
          array (
            'name' => 'Font Squirrel API',
            'description' => '@font-your-face provider with Font Squirrel fonts.',
            'dependencies' => 
            array (
              0 => 'fontyourface',
            ),
            'package' => '@font-your-face',
            'core' => '7.x',
            'php' => '5.2.0',
            'version' => '7.x-2.8',
            'project' => 'fontyourface',
            'datestamp' => '1367195415',
          ),
          'schema_version' => 0,
          'project' => 'fontyourface',
          'version' => '7.x-2.8',
        ),
        'fonts_com' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/fontyourface/modules/fonts_com/fonts_com.module',
          'basename' => 'fonts_com.module',
          'name' => 'fonts_com',
          'info' => 
          array (
            'name' => 'Fonts.com',
            'description' => '@font-your-face provider of fonts from Fonts.com.',
            'dependencies' => 
            array (
              0 => 'fontyourface',
            ),
            'package' => '@font-your-face',
            'core' => '7.x',
            'php' => '5.2.0',
            'files' => 
            array (
              0 => 'api.inc',
            ),
            'version' => '7.x-2.8',
            'project' => 'fontyourface',
            'datestamp' => '1367195415',
          ),
          'schema_version' => 0,
          'project' => 'fontyourface',
          'version' => '7.x-2.8',
        ),
        'fontdeck' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/fontyourface/modules/fontdeck/fontdeck.module',
          'basename' => 'fontdeck.module',
          'name' => 'fontdeck',
          'info' => 
          array (
            'name' => 'Fontdeck',
            'description' => '@font-your-face provider of fonts from Fontdeck.com.',
            'dependencies' => 
            array (
              0 => 'fontyourface',
            ),
            'package' => '@font-your-face',
            'core' => '7.x',
            'php' => '5.2.0',
            'files' => 
            array (
              0 => 'fontdeck.install',
              1 => 'fontdeck.module',
            ),
            'version' => '7.x-2.8',
            'project' => 'fontyourface',
            'datestamp' => '1367195415',
          ),
          'schema_version' => 0,
          'project' => 'fontyourface',
          'version' => '7.x-2.8',
        ),
        'local_fonts' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/fontyourface/modules/local_fonts/local_fonts.module',
          'basename' => 'local_fonts.module',
          'name' => 'local_fonts',
          'info' => 
          array (
            'name' => 'Local Fonts',
            'description' => '@font-your-face provider with fonts installed locally on the Drupal server.',
            'dependencies' => 
            array (
              0 => 'fontyourface',
            ),
            'package' => '@font-your-face',
            'core' => '7.x',
            'version' => '7.x-2.8',
            'project' => 'fontyourface',
            'datestamp' => '1367195415',
            'php' => '5.2.4',
          ),
          'schema_version' => '7200',
          'project' => 'fontyourface',
          'version' => '7.x-2.8',
        ),
        'fontyourface_wysiwyg' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/fontyourface/modules/fontyourface_wysiwyg/fontyourface_wysiwyg.module',
          'basename' => 'fontyourface_wysiwyg.module',
          'name' => 'fontyourface_wysiwyg',
          'info' => 
          array (
            'name' => 'WYSIWYG for @font-your-face',
            'description' => 'Adds list of enabled fonts to WYSIWYG.',
            'dependencies' => 
            array (
              0 => 'fontyourface',
              1 => 'wysiwyg',
            ),
            'package' => '@font-your-face',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'fontyourface_wysiwyg.module',
            ),
            'version' => '7.x-2.8',
            'project' => 'fontyourface',
            'datestamp' => '1367195415',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'fontyourface',
          'version' => '7.x-2.8',
        ),
        'edge_fonts' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/fontyourface/modules/edge_fonts/edge_fonts.module',
          'basename' => 'edge_fonts.module',
          'name' => 'edge_fonts',
          'info' => 
          array (
            'name' => 'Edge Fonts',
            'description' => '@font-your-face provider for Edge Fonts.',
            'dependencies' => 
            array (
              0 => 'fontyourface',
            ),
            'package' => '@font-your-face',
            'core' => '7.x',
            'version' => '7.x-2.8',
            'project' => 'fontyourface',
            'datestamp' => '1367195415',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'fontyourface',
          'version' => '7.x-2.8',
        ),
        'google_fonts_api' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/fontyourface/modules/google_fonts_api/google_fonts_api.module',
          'basename' => 'google_fonts_api.module',
          'name' => 'google_fonts_api',
          'info' => 
          array (
            'name' => 'Google Fonts API',
            'description' => '@font-your-face provider with Google fonts.',
            'dependencies' => 
            array (
              0 => 'fontyourface',
            ),
            'package' => '@font-your-face',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'views/google_fonts_api.views_default.inc',
            ),
            'version' => '7.x-2.8',
            'project' => 'fontyourface',
            'datestamp' => '1367195415',
            'php' => '5.2.4',
          ),
          'schema_version' => '7100',
          'project' => 'fontyourface',
          'version' => '7.x-2.8',
        ),
        'font_reference' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/fontyourface/modules/font_reference/font_reference.module',
          'basename' => 'font_reference.module',
          'name' => 'font_reference',
          'info' => 
          array (
            'name' => 'Font Reference',
            'description' => 'Defines a field type for referencing a font from a node.',
            'package' => 'Fields',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'fontyourface',
              1 => 'field',
              2 => 'options',
            ),
            'version' => '7.x-2.8',
            'project' => 'fontyourface',
            'datestamp' => '1367195415',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'fontyourface',
          'version' => '7.x-2.8',
        ),
        'typekit_api' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/fontyourface/modules/typekit_api/typekit_api.module',
          'basename' => 'typekit_api.module',
          'name' => 'typekit_api',
          'info' => 
          array (
            'name' => 'Typekit API',
            'description' => '@font-your-face provider with Typekit.com fonts.',
            'dependencies' => 
            array (
              0 => 'fontyourface',
            ),
            'package' => '@font-your-face',
            'core' => '7.x',
            'php' => '5.2.0',
            'version' => '7.x-2.8',
            'project' => 'fontyourface',
            'datestamp' => '1367195415',
          ),
          'schema_version' => 0,
          'project' => 'fontyourface',
          'version' => '7.x-2.8',
        ),
        'fontyourface' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/fontyourface/fontyourface.module',
          'basename' => 'fontyourface.module',
          'name' => 'fontyourface',
          'info' => 
          array (
            'name' => '@font-your-face',
            'description' => 'Manages web fonts.',
            'package' => '@font-your-face',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'fontyourface.test',
            ),
            'version' => '7.x-2.8',
            'project' => 'fontyourface',
            'datestamp' => '1367195415',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7204',
          'project' => 'fontyourface',
          'version' => '7.x-2.8',
        ),
        'defaultcontent' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/defaultcontent/defaultcontent.module',
          'basename' => 'defaultcontent.module',
          'name' => 'defaultcontent',
          'info' => 
          array (
            'name' => 'Default Content',
            'description' => 'Allows import/export of default content.',
            'core' => '7.x',
            'package' => 'Features',
            'dependencies' => 
            array (
              0 => 'features',
              1 => 'ctools',
              2 => 'menu',
            ),
            'version' => '7.x-1.0-alpha9',
            'project' => 'defaultcontent',
            'datestamp' => '1359180370',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'defaultcontent',
          'version' => '7.x-1.0-alpha9',
        ),
        'views_bulk_operations' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/views_bulk_operations/views_bulk_operations.module',
          'basename' => 'views_bulk_operations.module',
          'name' => 'views_bulk_operations',
          'info' => 
          array (
            'name' => 'Views Bulk Operations',
            'description' => 'Provides a way of selecting multiple rows and applying operations to them.',
            'dependencies' => 
            array (
              0 => 'entity',
              1 => 'views',
            ),
            'package' => 'Views',
            'core' => '7.x',
            'php' => '5.2.9',
            'files' => 
            array (
              0 => 'plugins/operation_types/base.class.php',
              1 => 'views/views_bulk_operations_handler_field_operations.inc',
            ),
            'version' => '7.x-3.2',
            'project' => 'views_bulk_operations',
            'datestamp' => '1387798183',
          ),
          'schema_version' => 0,
          'project' => 'views_bulk_operations',
          'version' => '7.x-3.2',
        ),
        'actions_permissions' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/views_bulk_operations/actions_permissions.module',
          'basename' => 'actions_permissions.module',
          'name' => 'actions_permissions',
          'info' => 
          array (
            'name' => 'Actions permissions (VBO)',
            'description' => 'Provides permission-based access control for actions. Used by Views Bulk Operations.',
            'package' => 'Administration',
            'core' => '7.x',
            'version' => '7.x-3.2',
            'project' => 'views_bulk_operations',
            'datestamp' => '1387798183',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'views_bulk_operations',
          'version' => '7.x-3.2',
        ),
        'panels_ipe' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/panels/panels_ipe/panels_ipe.module',
          'basename' => 'panels_ipe.module',
          'name' => 'panels_ipe',
          'info' => 
          array (
            'name' => 'Panels In-Place Editor',
            'description' => 'Provide a UI for managing some Panels directly on the frontend, instead of having to use the backend.',
            'package' => 'Panels',
            'dependencies' => 
            array (
              0 => 'panels',
            ),
            'core' => '7.x',
            'configure' => 'admin/structure/panels',
            'files' => 
            array (
              0 => 'panels_ipe.module',
            ),
            'version' => '7.x-3.3',
            'project' => 'panels',
            'datestamp' => '1345319572',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'panels',
          'version' => '7.x-3.3',
        ),
        'panels_node' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/panels/panels_node/panels_node.module',
          'basename' => 'panels_node.module',
          'name' => 'panels_node',
          'info' => 
          array (
            'name' => 'Panel nodes',
            'description' => 'Create nodes that are divided into areas with selectable content.',
            'package' => 'Panels',
            'dependencies' => 
            array (
              0 => 'panels',
            ),
            'configure' => 'admin/structure/panels',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'panels_node.module',
            ),
            'version' => '7.x-3.3',
            'project' => 'panels',
            'datestamp' => '1345319572',
            'php' => '5.2.4',
          ),
          'schema_version' => '6001',
          'project' => 'panels',
          'version' => '7.x-3.3',
        ),
        'panels_mini' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/panels/panels_mini/panels_mini.module',
          'basename' => 'panels_mini.module',
          'name' => 'panels_mini',
          'info' => 
          array (
            'name' => 'Mini panels',
            'description' => 'Create mini panels that can be used as blocks by Drupal and panes by other panel modules.',
            'package' => 'Panels',
            'dependencies' => 
            array (
              0 => 'panels',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'plugins/export_ui/panels_mini_ui.class.php',
            ),
            'version' => '7.x-3.3',
            'project' => 'panels',
            'datestamp' => '1345319572',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'panels',
          'version' => '7.x-3.3',
        ),
        'panels' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/panels/panels.module',
          'basename' => 'panels.module',
          'name' => 'panels',
          'info' => 
          array (
            'name' => 'Panels',
            'description' => 'Core Panels display functions; provides no external UI, at least one other Panels module should be enabled.',
            'core' => '7.x',
            'package' => 'Panels',
            'configure' => 'admin/structure/panels',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'files' => 
            array (
              0 => 'panels.module',
              1 => 'includes/common.inc',
              2 => 'includes/legacy.inc',
              3 => 'includes/plugins.inc',
              4 => 'plugins/views/panels_views_plugin_row_fields.inc',
            ),
            'version' => '7.x-3.3',
            'project' => 'panels',
            'datestamp' => '1345319572',
            'php' => '5.2.4',
          ),
          'schema_version' => '7301',
          'project' => 'panels',
          'version' => '7.x-3.3',
        ),
        'recaptcha_mailhide' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/recaptcha/recaptcha_mailhide.module',
          'basename' => 'recaptcha_mailhide.module',
          'name' => 'recaptcha_mailhide',
          'info' => 
          array (
            'name' => 'reCAPTCHA Mailhide',
            'description' => 'Uses the reCAPTCHA web service to protect email addresses.',
            'package' => 'Spam control',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'recaptcha_mailhide.module',
            ),
            'version' => '7.x-1.11',
            'project' => 'recaptcha',
            'datestamp' => '1391701492',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'recaptcha',
          'version' => '7.x-1.11',
        ),
        'recaptcha' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/recaptcha/recaptcha.module',
          'basename' => 'recaptcha.module',
          'name' => 'recaptcha',
          'info' => 
          array (
            'name' => 'reCAPTCHA',
            'description' => 'Uses the reCAPTCHA web service to improve the CAPTCHA system.',
            'dependencies' => 
            array (
              0 => 'captcha',
            ),
            'package' => 'Spam control',
            'core' => '7.x',
            'configure' => 'admin/config/people/captcha/recaptcha',
            'files' => 
            array (
              0 => 'recaptcha.admin.inc',
              1 => 'recaptcha.module',
              2 => 'recaptcha.install',
            ),
            'version' => '7.x-1.11',
            'project' => 'recaptcha',
            'datestamp' => '1391701492',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'recaptcha',
          'version' => '7.x-1.11',
        ),
        'simplenews_rules' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/simplenews/simplenews_rules/simplenews_rules.module',
          'basename' => 'simplenews_rules.module',
          'name' => 'simplenews_rules',
          'info' => 
          array (
            'name' => 'Simplenews rules',
            'description' => 'Provides integration with Rules module for Simplenews.',
            'dependencies' => 
            array (
              0 => 'simplenews',
              1 => 'rules',
            ),
            'package' => 'Mail',
            'core' => '7.x',
            'version' => '7.x-1.0-rc1',
            'project' => 'simplenews',
            'datestamp' => '1339011135',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'simplenews',
          'version' => '7.x-1.0-rc1',
        ),
        'simplenews' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/simplenews/simplenews.module',
          'basename' => 'simplenews.module',
          'name' => 'simplenews',
          'info' => 
          array (
            'name' => 'Simplenews',
            'description' => 'Send newsletters to subscribed email addresses.',
            'package' => 'Mail',
            'core' => '7.x',
            'configure' => 'admin/config/services/simplenews',
            'dependencies' => 
            array (
              0 => 'taxonomy',
            ),
            'test_dependencies' => 
            array (
              0 => 'i18n_taxonomy',
            ),
            'files' => 
            array (
              0 => 'tests/simplenews.test',
              1 => 'includes/simplenews.source.inc',
              2 => 'includes/views/handlers/simplenews_handler_field_newsletter_status.inc',
              3 => 'includes/views/handlers/simplenews_handler_field_newsletter_priority.inc',
              4 => 'includes/views/handlers/simplenews_handler_field_category_hyperlinks.inc',
              5 => 'includes/views/handlers/simplenews_handler_field_category_new_account.inc',
              6 => 'includes/views/handlers/simplenews_handler_field_category_opt_inout.inc',
              7 => 'includes/views/handlers/simplenews_handler_field_newsletter_send.inc',
              8 => 'includes/views/handlers/simplenews_handler_filter_newsletter_status.inc',
              9 => 'includes/views/handlers/simplenews_handler_filter_newsletter_priority.inc',
              10 => 'includes/views/handlers/simplenews_handler_filter_category_hyperlinks.inc',
              11 => 'includes/views/handlers/simplenews_handler_filter_category_new_account.inc',
              12 => 'includes/views/handlers/simplenews_handler_filter_category_opt_inout.inc',
            ),
            'version' => '7.x-1.0-rc1',
            'project' => 'simplenews',
            'datestamp' => '1339011135',
            'php' => '5.2.4',
          ),
          'schema_version' => '7006',
          'project' => 'simplenews',
          'version' => '7.x-1.0-rc1',
        ),
        'strongarm' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/strongarm/strongarm.module',
          'basename' => 'strongarm.module',
          'name' => 'strongarm',
          'info' => 
          array (
            'name' => 'Strongarm',
            'description' => 'Enforces variable values defined by modules that need settings set to operate properly.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'files' => 
            array (
              0 => 'strongarm.admin.inc',
              1 => 'strongarm.install',
              2 => 'strongarm.module',
            ),
            'version' => '7.x-2.0',
            'project' => 'strongarm',
            'datestamp' => '1339604214',
            'php' => '5.2.4',
          ),
          'schema_version' => '7201',
          'project' => 'strongarm',
          'version' => '7.x-2.0',
        ),
        'views_slideshow_cycle' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/views_slideshow/contrib/views_slideshow_cycle/views_slideshow_cycle.module',
          'basename' => 'views_slideshow_cycle.module',
          'name' => 'views_slideshow_cycle',
          'info' => 
          array (
            'name' => 'Views Slideshow: Cycle',
            'description' => 'Adds a Rotating slideshow mode to Views Slideshow.',
            'dependencies' => 
            array (
              0 => 'views_slideshow',
              1 => 'libraries',
            ),
            'package' => 'Views',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'views_slideshow_cycle.module',
              1 => 'views_slideshow_cycle.views_slideshow.inc',
              2 => 'theme/views_slideshow_cycle.theme.inc',
            ),
            'version' => '7.x-3.1',
            'project' => 'views_slideshow',
            'datestamp' => '1382584826',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'views_slideshow',
          'version' => '7.x-3.1',
        ),
        'views_slideshow' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/views_slideshow/views_slideshow.module',
          'basename' => 'views_slideshow.module',
          'name' => 'views_slideshow',
          'info' => 
          array (
            'name' => 'Views Slideshow',
            'description' => 'Provides a View style that displays rows as a jQuery slideshow.  This is an API and requires Views Slideshow Cycle or another module that supports the API.',
            'dependencies' => 
            array (
              0 => 'views (>=3.0)',
            ),
            'package' => 'Views',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'views_slideshow.module',
              1 => 'theme/views_slideshow.theme.inc',
              2 => 'views_slideshow.views.inc',
              3 => 'views_slideshow_plugin_style_slideshow.inc',
            ),
            'version' => '7.x-3.1',
            'project' => 'views_slideshow',
            'datestamp' => '1382584826',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'views_slideshow',
          'version' => '7.x-3.1',
        ),
        'ctools_ajax_sample' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/ctools/ctools_ajax_sample/ctools_ajax_sample.module',
          'basename' => 'ctools_ajax_sample.module',
          'name' => 'ctools_ajax_sample',
          'info' => 
          array (
            'name' => 'Chaos Tools (CTools) AJAX Example',
            'description' => 'Shows how to use the power of Chaos AJAX.',
            'package' => 'Chaos tool suite',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'core' => '7.x',
            'version' => '7.x-1.4',
            'project' => 'ctools',
            'datestamp' => '1392220730',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'ctools',
          'version' => '7.x-1.4',
        ),
        'ctools_custom_content' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/ctools/ctools_custom_content/ctools_custom_content.module',
          'basename' => 'ctools_custom_content.module',
          'name' => 'ctools_custom_content',
          'info' => 
          array (
            'name' => 'Custom content panes',
            'description' => 'Create custom, exportable, reusable content panes for applications like Panels.',
            'core' => '7.x',
            'package' => 'Chaos tool suite',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'version' => '7.x-1.4',
            'project' => 'ctools',
            'datestamp' => '1392220730',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'ctools',
          'version' => '7.x-1.4',
        ),
        'stylizer' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/ctools/stylizer/stylizer.module',
          'basename' => 'stylizer.module',
          'name' => 'stylizer',
          'info' => 
          array (
            'name' => 'Stylizer',
            'description' => 'Create custom styles for applications such as Panels.',
            'core' => '7.x',
            'package' => 'Chaos tool suite',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'color',
            ),
            'version' => '7.x-1.4',
            'project' => 'ctools',
            'datestamp' => '1392220730',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'ctools',
          'version' => '7.x-1.4',
        ),
        'page_manager' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/ctools/page_manager/page_manager.module',
          'basename' => 'page_manager.module',
          'name' => 'page_manager',
          'info' => 
          array (
            'name' => 'Page manager',
            'description' => 'Provides a UI and API to manage pages within the site.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'package' => 'Chaos tool suite',
            'version' => '7.x-1.4',
            'project' => 'ctools',
            'datestamp' => '1392220730',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'ctools',
          'version' => '7.x-1.4',
        ),
        'ctools_plugin_example' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/ctools/ctools_plugin_example/ctools_plugin_example.module',
          'basename' => 'ctools_plugin_example.module',
          'name' => 'ctools_plugin_example',
          'info' => 
          array (
            'name' => 'Chaos Tools (CTools) Plugin Example',
            'description' => 'Shows how an external module can provide ctools plugins (for Panels, etc.).',
            'package' => 'Chaos tool suite',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'panels',
              2 => 'page_manager',
              3 => 'advanced_help',
            ),
            'core' => '7.x',
            'version' => '7.x-1.4',
            'project' => 'ctools',
            'datestamp' => '1392220730',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'ctools',
          'version' => '7.x-1.4',
        ),
        'ctools_export_test' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/ctools/tests/ctools_export_test/ctools_export_test.module',
          'basename' => 'ctools_export_test.module',
          'name' => 'ctools_export_test',
          'info' => 
          array (
            'name' => 'CTools export test',
            'description' => 'CTools export test module',
            'core' => '7.x',
            'package' => 'Chaos tool suite',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'hidden' => true,
            'files' => 
            array (
              0 => 'ctools_export.test',
            ),
            'version' => '7.x-1.4',
            'project' => 'ctools',
            'datestamp' => '1392220730',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'ctools',
          'version' => '7.x-1.4',
        ),
        'ctools_plugin_test' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/ctools/tests/ctools_plugin_test.module',
          'basename' => 'ctools_plugin_test.module',
          'name' => 'ctools_plugin_test',
          'info' => 
          array (
            'name' => 'Chaos tools plugins test',
            'description' => 'Provides hooks for testing ctools plugins.',
            'package' => 'Chaos tool suite',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'files' => 
            array (
              0 => 'ctools.plugins.test',
              1 => 'object_cache.test',
              2 => 'css.test',
              3 => 'context.test',
              4 => 'math_expression.test',
              5 => 'math_expression_stack.test',
            ),
            'hidden' => true,
            'version' => '7.x-1.4',
            'project' => 'ctools',
            'datestamp' => '1392220730',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'ctools',
          'version' => '7.x-1.4',
        ),
        'ctools_access_ruleset' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/ctools/ctools_access_ruleset/ctools_access_ruleset.module',
          'basename' => 'ctools_access_ruleset.module',
          'name' => 'ctools_access_ruleset',
          'info' => 
          array (
            'name' => 'Custom rulesets',
            'description' => 'Create custom, exportable, reusable access rulesets for applications like Panels.',
            'core' => '7.x',
            'package' => 'Chaos tool suite',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'version' => '7.x-1.4',
            'project' => 'ctools',
            'datestamp' => '1392220730',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'ctools',
          'version' => '7.x-1.4',
        ),
        'views_content' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/ctools/views_content/views_content.module',
          'basename' => 'views_content.module',
          'name' => 'views_content',
          'info' => 
          array (
            'name' => 'Views content panes',
            'description' => 'Allows Views content to be used in Panels, Dashboard and other modules which use the CTools Content API.',
            'package' => 'Chaos tool suite',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'views',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'plugins/views/views_content_plugin_display_ctools_context.inc',
              1 => 'plugins/views/views_content_plugin_display_panel_pane.inc',
              2 => 'plugins/views/views_content_plugin_style_ctools_context.inc',
            ),
            'version' => '7.x-1.4',
            'project' => 'ctools',
            'datestamp' => '1392220730',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'ctools',
          'version' => '7.x-1.4',
        ),
        'bulk_export' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/ctools/bulk_export/bulk_export.module',
          'basename' => 'bulk_export.module',
          'name' => 'bulk_export',
          'info' => 
          array (
            'name' => 'Bulk Export',
            'description' => 'Performs bulk exporting of data objects known about by Chaos tools.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'package' => 'Chaos tool suite',
            'version' => '7.x-1.4',
            'project' => 'ctools',
            'datestamp' => '1392220730',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'ctools',
          'version' => '7.x-1.4',
        ),
        'term_depth' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/ctools/term_depth/term_depth.module',
          'basename' => 'term_depth.module',
          'name' => 'term_depth',
          'info' => 
          array (
            'name' => 'Term Depth access',
            'description' => 'Controls access to context based upon term depth',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'package' => 'Chaos tool suite',
            'version' => '7.x-1.4',
            'project' => 'ctools',
            'datestamp' => '1392220730',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'ctools',
          'version' => '7.x-1.4',
        ),
        'ctools' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/ctools/ctools.module',
          'basename' => 'ctools.module',
          'name' => 'ctools',
          'info' => 
          array (
            'name' => 'Chaos tools',
            'description' => 'A library of helpful tools by Merlin of Chaos.',
            'core' => '7.x',
            'package' => 'Chaos tool suite',
            'files' => 
            array (
              0 => 'includes/context.inc',
              1 => 'includes/math-expr.inc',
              2 => 'includes/stylizer.inc',
            ),
            'version' => '7.x-1.4',
            'project' => 'ctools',
            'datestamp' => '1392220730',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '6008',
          'project' => 'ctools',
          'version' => '7.x-1.4',
        ),
        'link' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/link/link.module',
          'basename' => 'link.module',
          'name' => 'link',
          'info' => 
          array (
            'name' => 'Link',
            'description' => 'Defines simple link field types.',
            'core' => '7.x',
            'package' => 'Fields',
            'files' => 
            array (
              0 => 'link.module',
              1 => 'link.migrate.inc',
              2 => 'tests/link.test',
              3 => 'tests/link.attribute.test',
              4 => 'tests/link.crud.test',
              5 => 'tests/link.crud_browser.test',
              6 => 'tests/link.token.test',
              7 => 'tests/link.validate.test',
              8 => 'views/link_views_handler_argument_target.inc',
              9 => 'views/link_views_handler_filter_protocol.inc',
            ),
            'version' => '7.x-1.2',
            'project' => 'link',
            'datestamp' => '1385335705',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7001',
          'project' => 'link',
          'version' => '7.x-1.2',
        ),
        'image_captcha' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/captcha/image_captcha/image_captcha.module',
          'basename' => 'image_captcha.module',
          'name' => 'image_captcha',
          'info' => 
          array (
            'name' => 'Image CAPTCHA',
            'description' => 'Provides an image based CAPTCHA.',
            'package' => 'Spam control',
            'dependencies' => 
            array (
              0 => 'captcha',
            ),
            'core' => '7.x',
            'configure' => 'admin/config/people/captcha/image_captcha',
            'files' => 
            array (
              0 => 'image_captcha.install',
              1 => 'image_captcha.module',
              2 => 'image_captcha.admin.inc',
              3 => 'image_captcha.user.inc',
            ),
            'version' => '7.x-1.0',
            'project' => 'captcha',
            'datestamp' => '1372203950',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'captcha',
          'version' => '7.x-1.0',
        ),
        'captcha' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/captcha/captcha.module',
          'basename' => 'captcha.module',
          'name' => 'captcha',
          'info' => 
          array (
            'name' => 'CAPTCHA',
            'description' => 'Base CAPTCHA module for adding challenges to arbitrary forms.',
            'package' => 'Spam control',
            'core' => '7.x',
            'configure' => 'admin/config/people/captcha',
            'files' => 
            array (
              0 => 'captcha.module',
              1 => 'captcha.inc',
              2 => 'captcha.admin.inc',
              3 => 'captcha.install',
              4 => 'captcha.test',
            ),
            'version' => '7.x-1.0',
            'project' => 'captcha',
            'datestamp' => '1372203950',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7000',
          'project' => 'captcha',
          'version' => '7.x-1.0',
        ),
        'filefield_sources' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/filefield_sources/filefield_sources.module',
          'basename' => 'filefield_sources.module',
          'name' => 'filefield_sources',
          'info' => 
          array (
            'name' => 'File Field Sources',
            'description' => 'Extends File fields to allow referencing of existing files, remote files, and server files.',
            'dependencies' => 
            array (
              0 => 'file',
            ),
            'package' => 'Fields',
            'core' => '7.x',
            'version' => '7.x-1.9',
            'project' => 'filefield_sources',
            'datestamp' => '1383155428',
            'php' => '5.2.4',
          ),
          'schema_version' => '6001',
          'project' => 'filefield_sources',
          'version' => '7.x-1.9',
        ),
        'superfish' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/superfish/superfish.module',
          'basename' => 'superfish.module',
          'name' => 'superfish',
          'info' => 
          array (
            'name' => 'Superfish',
            'description' => 'jQuery Superfish plugin for your Drupal menus.',
            'package' => 'User interface',
            'dependencies' => 
            array (
              0 => 'menu',
            ),
            'configure' => 'admin/config/user-interface/superfish',
            'core' => '7.x',
            'version' => '7.x-1.9',
            'project' => 'superfish',
            'datestamp' => '1367054112',
            'php' => '5.2.4',
          ),
          'schema_version' => '7100',
          'project' => 'superfish',
          'version' => '7.x-1.9',
        ),
        'libraries' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/libraries/libraries.module',
          'basename' => 'libraries.module',
          'name' => 'libraries',
          'info' => 
          array (
            'name' => 'Libraries',
            'description' => 'Allows version dependent and shared usage of external libraries.',
            'core' => '7.x',
            'version' => '7.x-1.0',
            'project' => 'libraries',
            'datestamp' => '1296096156',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'libraries',
          'version' => '7.x-1.0',
        ),
        'features_test' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/features/tests/features_test.module',
          'basename' => 'features_test.module',
          'name' => 'features_test',
          'info' => 
          array (
            'name' => 'Features Tests',
            'description' => 'Test module for Features testing.',
            'core' => '7.x',
            'package' => 'Testing',
            'php' => '5.2.0',
            'dependencies' => 
            array (
              0 => 'features',
              1 => 'image',
              2 => 'strongarm',
              3 => 'taxonomy',
              4 => 'views',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'strongarm:strongarm:1',
                1 => 'views:views_default:3.0',
              ),
              'features_api' => 
              array (
                0 => 'api:1',
              ),
              'field' => 
              array (
                0 => 'node-features_test-field_features_test',
              ),
              'filter' => 
              array (
                0 => 'features_test',
              ),
              'image' => 
              array (
                0 => 'features_test',
              ),
              'node' => 
              array (
                0 => 'features_test',
              ),
              'taxonomy' => 
              array (
                0 => 'taxonomy_features_test',
              ),
              'user_permission' => 
              array (
                0 => 'create features_test content',
              ),
              'views_view' => 
              array (
                0 => 'features_test',
              ),
            ),
            'hidden' => true,
            'version' => '7.x-1.0',
            'project' => 'features',
            'datestamp' => '1343240292',
          ),
          'schema_version' => 0,
          'project' => 'features',
          'version' => '7.x-1.0',
        ),
        'features' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/features/features.module',
          'basename' => 'features.module',
          'name' => 'features',
          'info' => 
          array (
            'name' => 'Features',
            'description' => 'Provides feature management for Drupal.',
            'core' => '7.x',
            'package' => 'Features',
            'files' => 
            array (
              0 => 'tests/features.test',
            ),
            'version' => '7.x-1.0',
            'project' => 'features',
            'datestamp' => '1343240292',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '6101',
          'project' => 'features',
          'version' => '7.x-1.0',
        ),
        'views_export' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/views/views_export/views_export.module',
          'basename' => 'views_export.module',
          'name' => 'views_export',
          'info' => 
          array (
            'dependencies' => 
            array (
            ),
            'description' => '',
            'version' => NULL,
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => '',
          'version' => NULL,
        ),
        'views_test' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/views/tests/views_test.module',
          'basename' => 'views_test.module',
          'name' => 'views_test',
          'info' => 
          array (
            'name' => 'Views Test',
            'description' => 'Test module for Views.',
            'package' => 'Views',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'views',
            ),
            'hidden' => true,
            'version' => '7.x-3.8',
            'project' => 'views',
            'datestamp' => '1400618928',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'views',
          'version' => '7.x-3.8',
        ),
        'views_ui' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/views/views_ui.module',
          'basename' => 'views_ui.module',
          'name' => 'views_ui',
          'info' => 
          array (
            'name' => 'Views UI',
            'description' => 'Administrative interface to views. Without this module, you cannot create or edit your views.',
            'package' => 'Views',
            'core' => '7.x',
            'configure' => 'admin/structure/views',
            'dependencies' => 
            array (
              0 => 'views',
            ),
            'files' => 
            array (
              0 => 'views_ui.module',
              1 => 'plugins/views_wizard/views_ui_base_views_wizard.class.php',
            ),
            'version' => '7.x-3.8',
            'project' => 'views',
            'datestamp' => '1400618928',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'views',
          'version' => '7.x-3.8',
        ),
        'views' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/views/views.module',
          'basename' => 'views.module',
          'name' => 'views',
          'info' => 
          array (
            'name' => 'Views',
            'description' => 'Create customized lists and queries from your database.',
            'package' => 'Views',
            'core' => '7.x',
            'php' => '5.2',
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'css/views.css',
              ),
            ),
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'files' => 
            array (
              0 => 'handlers/views_handler_area.inc',
              1 => 'handlers/views_handler_area_messages.inc',
              2 => 'handlers/views_handler_area_result.inc',
              3 => 'handlers/views_handler_area_text.inc',
              4 => 'handlers/views_handler_area_text_custom.inc',
              5 => 'handlers/views_handler_area_view.inc',
              6 => 'handlers/views_handler_argument.inc',
              7 => 'handlers/views_handler_argument_date.inc',
              8 => 'handlers/views_handler_argument_formula.inc',
              9 => 'handlers/views_handler_argument_many_to_one.inc',
              10 => 'handlers/views_handler_argument_null.inc',
              11 => 'handlers/views_handler_argument_numeric.inc',
              12 => 'handlers/views_handler_argument_string.inc',
              13 => 'handlers/views_handler_argument_group_by_numeric.inc',
              14 => 'handlers/views_handler_field.inc',
              15 => 'handlers/views_handler_field_counter.inc',
              16 => 'handlers/views_handler_field_boolean.inc',
              17 => 'handlers/views_handler_field_contextual_links.inc',
              18 => 'handlers/views_handler_field_custom.inc',
              19 => 'handlers/views_handler_field_date.inc',
              20 => 'handlers/views_handler_field_entity.inc',
              21 => 'handlers/views_handler_field_markup.inc',
              22 => 'handlers/views_handler_field_math.inc',
              23 => 'handlers/views_handler_field_numeric.inc',
              24 => 'handlers/views_handler_field_prerender_list.inc',
              25 => 'handlers/views_handler_field_time_interval.inc',
              26 => 'handlers/views_handler_field_serialized.inc',
              27 => 'handlers/views_handler_field_machine_name.inc',
              28 => 'handlers/views_handler_field_url.inc',
              29 => 'handlers/views_handler_filter.inc',
              30 => 'handlers/views_handler_filter_boolean_operator.inc',
              31 => 'handlers/views_handler_filter_boolean_operator_string.inc',
              32 => 'handlers/views_handler_filter_combine.inc',
              33 => 'handlers/views_handler_filter_date.inc',
              34 => 'handlers/views_handler_filter_equality.inc',
              35 => 'handlers/views_handler_filter_entity_bundle.inc',
              36 => 'handlers/views_handler_filter_group_by_numeric.inc',
              37 => 'handlers/views_handler_filter_in_operator.inc',
              38 => 'handlers/views_handler_filter_many_to_one.inc',
              39 => 'handlers/views_handler_filter_numeric.inc',
              40 => 'handlers/views_handler_filter_string.inc',
              41 => 'handlers/views_handler_filter_fields_compare.inc',
              42 => 'handlers/views_handler_relationship.inc',
              43 => 'handlers/views_handler_relationship_groupwise_max.inc',
              44 => 'handlers/views_handler_sort.inc',
              45 => 'handlers/views_handler_sort_date.inc',
              46 => 'handlers/views_handler_sort_formula.inc',
              47 => 'handlers/views_handler_sort_group_by_numeric.inc',
              48 => 'handlers/views_handler_sort_menu_hierarchy.inc',
              49 => 'handlers/views_handler_sort_random.inc',
              50 => 'includes/base.inc',
              51 => 'includes/handlers.inc',
              52 => 'includes/plugins.inc',
              53 => 'includes/view.inc',
              54 => 'modules/aggregator/views_handler_argument_aggregator_fid.inc',
              55 => 'modules/aggregator/views_handler_argument_aggregator_iid.inc',
              56 => 'modules/aggregator/views_handler_argument_aggregator_category_cid.inc',
              57 => 'modules/aggregator/views_handler_field_aggregator_title_link.inc',
              58 => 'modules/aggregator/views_handler_field_aggregator_category.inc',
              59 => 'modules/aggregator/views_handler_field_aggregator_item_description.inc',
              60 => 'modules/aggregator/views_handler_field_aggregator_xss.inc',
              61 => 'modules/aggregator/views_handler_filter_aggregator_category_cid.inc',
              62 => 'modules/aggregator/views_plugin_row_aggregator_rss.inc',
              63 => 'modules/book/views_plugin_argument_default_book_root.inc',
              64 => 'modules/comment/views_handler_argument_comment_user_uid.inc',
              65 => 'modules/comment/views_handler_field_comment.inc',
              66 => 'modules/comment/views_handler_field_comment_depth.inc',
              67 => 'modules/comment/views_handler_field_comment_link.inc',
              68 => 'modules/comment/views_handler_field_comment_link_approve.inc',
              69 => 'modules/comment/views_handler_field_comment_link_delete.inc',
              70 => 'modules/comment/views_handler_field_comment_link_edit.inc',
              71 => 'modules/comment/views_handler_field_comment_link_reply.inc',
              72 => 'modules/comment/views_handler_field_comment_node_link.inc',
              73 => 'modules/comment/views_handler_field_comment_username.inc',
              74 => 'modules/comment/views_handler_field_ncs_last_comment_name.inc',
              75 => 'modules/comment/views_handler_field_ncs_last_updated.inc',
              76 => 'modules/comment/views_handler_field_node_comment.inc',
              77 => 'modules/comment/views_handler_field_node_new_comments.inc',
              78 => 'modules/comment/views_handler_field_last_comment_timestamp.inc',
              79 => 'modules/comment/views_handler_filter_comment_user_uid.inc',
              80 => 'modules/comment/views_handler_filter_ncs_last_updated.inc',
              81 => 'modules/comment/views_handler_filter_node_comment.inc',
              82 => 'modules/comment/views_handler_sort_comment_thread.inc',
              83 => 'modules/comment/views_handler_sort_ncs_last_comment_name.inc',
              84 => 'modules/comment/views_handler_sort_ncs_last_updated.inc',
              85 => 'modules/comment/views_plugin_row_comment_rss.inc',
              86 => 'modules/comment/views_plugin_row_comment_view.inc',
              87 => 'modules/contact/views_handler_field_contact_link.inc',
              88 => 'modules/field/views_handler_field_field.inc',
              89 => 'modules/field/views_handler_relationship_entity_reverse.inc',
              90 => 'modules/field/views_handler_argument_field_list.inc',
              91 => 'modules/field/views_handler_argument_field_list_string.inc',
              92 => 'modules/field/views_handler_filter_field_list.inc',
              93 => 'modules/filter/views_handler_field_filter_format_name.inc',
              94 => 'modules/locale/views_handler_field_node_language.inc',
              95 => 'modules/locale/views_handler_filter_node_language.inc',
              96 => 'modules/locale/views_handler_argument_locale_group.inc',
              97 => 'modules/locale/views_handler_argument_locale_language.inc',
              98 => 'modules/locale/views_handler_field_locale_group.inc',
              99 => 'modules/locale/views_handler_field_locale_language.inc',
              100 => 'modules/locale/views_handler_field_locale_link_edit.inc',
              101 => 'modules/locale/views_handler_filter_locale_group.inc',
              102 => 'modules/locale/views_handler_filter_locale_language.inc',
              103 => 'modules/locale/views_handler_filter_locale_version.inc',
              104 => 'modules/node/views_handler_argument_dates_various.inc',
              105 => 'modules/node/views_handler_argument_node_language.inc',
              106 => 'modules/node/views_handler_argument_node_nid.inc',
              107 => 'modules/node/views_handler_argument_node_type.inc',
              108 => 'modules/node/views_handler_argument_node_vid.inc',
              109 => 'modules/node/views_handler_argument_node_uid_revision.inc',
              110 => 'modules/node/views_handler_field_history_user_timestamp.inc',
              111 => 'modules/node/views_handler_field_node.inc',
              112 => 'modules/node/views_handler_field_node_link.inc',
              113 => 'modules/node/views_handler_field_node_link_delete.inc',
              114 => 'modules/node/views_handler_field_node_link_edit.inc',
              115 => 'modules/node/views_handler_field_node_revision.inc',
              116 => 'modules/node/views_handler_field_node_revision_link.inc',
              117 => 'modules/node/views_handler_field_node_revision_link_delete.inc',
              118 => 'modules/node/views_handler_field_node_revision_link_revert.inc',
              119 => 'modules/node/views_handler_field_node_path.inc',
              120 => 'modules/node/views_handler_field_node_type.inc',
              121 => 'modules/node/views_handler_filter_history_user_timestamp.inc',
              122 => 'modules/node/views_handler_filter_node_access.inc',
              123 => 'modules/node/views_handler_filter_node_status.inc',
              124 => 'modules/node/views_handler_filter_node_type.inc',
              125 => 'modules/node/views_handler_filter_node_uid_revision.inc',
              126 => 'modules/node/views_plugin_argument_default_node.inc',
              127 => 'modules/node/views_plugin_argument_validate_node.inc',
              128 => 'modules/node/views_plugin_row_node_rss.inc',
              129 => 'modules/node/views_plugin_row_node_view.inc',
              130 => 'modules/profile/views_handler_field_profile_date.inc',
              131 => 'modules/profile/views_handler_field_profile_list.inc',
              132 => 'modules/profile/views_handler_filter_profile_selection.inc',
              133 => 'modules/search/views_handler_argument_search.inc',
              134 => 'modules/search/views_handler_field_search_score.inc',
              135 => 'modules/search/views_handler_filter_search.inc',
              136 => 'modules/search/views_handler_sort_search_score.inc',
              137 => 'modules/search/views_plugin_row_search_view.inc',
              138 => 'modules/statistics/views_handler_field_accesslog_path.inc',
              139 => 'modules/system/views_handler_argument_file_fid.inc',
              140 => 'modules/system/views_handler_field_file.inc',
              141 => 'modules/system/views_handler_field_file_extension.inc',
              142 => 'modules/system/views_handler_field_file_filemime.inc',
              143 => 'modules/system/views_handler_field_file_uri.inc',
              144 => 'modules/system/views_handler_field_file_status.inc',
              145 => 'modules/system/views_handler_filter_file_status.inc',
              146 => 'modules/taxonomy/views_handler_argument_taxonomy.inc',
              147 => 'modules/taxonomy/views_handler_argument_term_node_tid.inc',
              148 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth.inc',
              149 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth_modifier.inc',
              150 => 'modules/taxonomy/views_handler_argument_vocabulary_vid.inc',
              151 => 'modules/taxonomy/views_handler_argument_vocabulary_machine_name.inc',
              152 => 'modules/taxonomy/views_handler_field_taxonomy.inc',
              153 => 'modules/taxonomy/views_handler_field_term_node_tid.inc',
              154 => 'modules/taxonomy/views_handler_field_term_link_edit.inc',
              155 => 'modules/taxonomy/views_handler_filter_term_node_tid.inc',
              156 => 'modules/taxonomy/views_handler_filter_term_node_tid_depth.inc',
              157 => 'modules/taxonomy/views_handler_filter_vocabulary_vid.inc',
              158 => 'modules/taxonomy/views_handler_filter_vocabulary_machine_name.inc',
              159 => 'modules/taxonomy/views_handler_relationship_node_term_data.inc',
              160 => 'modules/taxonomy/views_plugin_argument_validate_taxonomy_term.inc',
              161 => 'modules/taxonomy/views_plugin_argument_default_taxonomy_tid.inc',
              162 => 'modules/tracker/views_handler_argument_tracker_comment_user_uid.inc',
              163 => 'modules/tracker/views_handler_filter_tracker_comment_user_uid.inc',
              164 => 'modules/tracker/views_handler_filter_tracker_boolean_operator.inc',
              165 => 'modules/system/views_handler_filter_system_type.inc',
              166 => 'modules/translation/views_handler_argument_node_tnid.inc',
              167 => 'modules/translation/views_handler_field_node_link_translate.inc',
              168 => 'modules/translation/views_handler_field_node_translation_link.inc',
              169 => 'modules/translation/views_handler_filter_node_tnid.inc',
              170 => 'modules/translation/views_handler_filter_node_tnid_child.inc',
              171 => 'modules/translation/views_handler_relationship_translation.inc',
              172 => 'modules/user/views_handler_argument_user_uid.inc',
              173 => 'modules/user/views_handler_argument_users_roles_rid.inc',
              174 => 'modules/user/views_handler_field_user.inc',
              175 => 'modules/user/views_handler_field_user_language.inc',
              176 => 'modules/user/views_handler_field_user_link.inc',
              177 => 'modules/user/views_handler_field_user_link_cancel.inc',
              178 => 'modules/user/views_handler_field_user_link_edit.inc',
              179 => 'modules/user/views_handler_field_user_mail.inc',
              180 => 'modules/user/views_handler_field_user_name.inc',
              181 => 'modules/user/views_handler_field_user_permissions.inc',
              182 => 'modules/user/views_handler_field_user_picture.inc',
              183 => 'modules/user/views_handler_field_user_roles.inc',
              184 => 'modules/user/views_handler_filter_user_current.inc',
              185 => 'modules/user/views_handler_filter_user_name.inc',
              186 => 'modules/user/views_handler_filter_user_permissions.inc',
              187 => 'modules/user/views_handler_filter_user_roles.inc',
              188 => 'modules/user/views_plugin_argument_default_current_user.inc',
              189 => 'modules/user/views_plugin_argument_default_user.inc',
              190 => 'modules/user/views_plugin_argument_validate_user.inc',
              191 => 'modules/user/views_plugin_row_user_view.inc',
              192 => 'plugins/views_plugin_access.inc',
              193 => 'plugins/views_plugin_access_none.inc',
              194 => 'plugins/views_plugin_access_perm.inc',
              195 => 'plugins/views_plugin_access_role.inc',
              196 => 'plugins/views_plugin_argument_default.inc',
              197 => 'plugins/views_plugin_argument_default_php.inc',
              198 => 'plugins/views_plugin_argument_default_fixed.inc',
              199 => 'plugins/views_plugin_argument_default_raw.inc',
              200 => 'plugins/views_plugin_argument_validate.inc',
              201 => 'plugins/views_plugin_argument_validate_numeric.inc',
              202 => 'plugins/views_plugin_argument_validate_php.inc',
              203 => 'plugins/views_plugin_cache.inc',
              204 => 'plugins/views_plugin_cache_none.inc',
              205 => 'plugins/views_plugin_cache_time.inc',
              206 => 'plugins/views_plugin_display.inc',
              207 => 'plugins/views_plugin_display_attachment.inc',
              208 => 'plugins/views_plugin_display_block.inc',
              209 => 'plugins/views_plugin_display_default.inc',
              210 => 'plugins/views_plugin_display_embed.inc',
              211 => 'plugins/views_plugin_display_extender.inc',
              212 => 'plugins/views_plugin_display_feed.inc',
              213 => 'plugins/views_plugin_display_page.inc',
              214 => 'plugins/views_plugin_exposed_form_basic.inc',
              215 => 'plugins/views_plugin_exposed_form.inc',
              216 => 'plugins/views_plugin_exposed_form_input_required.inc',
              217 => 'plugins/views_plugin_localization_core.inc',
              218 => 'plugins/views_plugin_localization.inc',
              219 => 'plugins/views_plugin_localization_none.inc',
              220 => 'plugins/views_plugin_pager.inc',
              221 => 'plugins/views_plugin_pager_full.inc',
              222 => 'plugins/views_plugin_pager_mini.inc',
              223 => 'plugins/views_plugin_pager_none.inc',
              224 => 'plugins/views_plugin_pager_some.inc',
              225 => 'plugins/views_plugin_query.inc',
              226 => 'plugins/views_plugin_query_default.inc',
              227 => 'plugins/views_plugin_row.inc',
              228 => 'plugins/views_plugin_row_fields.inc',
              229 => 'plugins/views_plugin_row_rss_fields.inc',
              230 => 'plugins/views_plugin_style.inc',
              231 => 'plugins/views_plugin_style_default.inc',
              232 => 'plugins/views_plugin_style_grid.inc',
              233 => 'plugins/views_plugin_style_list.inc',
              234 => 'plugins/views_plugin_style_jump_menu.inc',
              235 => 'plugins/views_plugin_style_mapping.inc',
              236 => 'plugins/views_plugin_style_rss.inc',
              237 => 'plugins/views_plugin_style_summary.inc',
              238 => 'plugins/views_plugin_style_summary_jump_menu.inc',
              239 => 'plugins/views_plugin_style_summary_unformatted.inc',
              240 => 'plugins/views_plugin_style_table.inc',
              241 => 'tests/handlers/views_handlers.test',
              242 => 'tests/handlers/views_handler_area_text.test',
              243 => 'tests/handlers/views_handler_argument_null.test',
              244 => 'tests/handlers/views_handler_argument_string.test',
              245 => 'tests/handlers/views_handler_field.test',
              246 => 'tests/handlers/views_handler_field_boolean.test',
              247 => 'tests/handlers/views_handler_field_custom.test',
              248 => 'tests/handlers/views_handler_field_counter.test',
              249 => 'tests/handlers/views_handler_field_date.test',
              250 => 'tests/handlers/views_handler_field_file_extension.test',
              251 => 'tests/handlers/views_handler_field_file_size.test',
              252 => 'tests/handlers/views_handler_field_math.test',
              253 => 'tests/handlers/views_handler_field_url.test',
              254 => 'tests/handlers/views_handler_field_xss.test',
              255 => 'tests/handlers/views_handler_filter_combine.test',
              256 => 'tests/handlers/views_handler_filter_date.test',
              257 => 'tests/handlers/views_handler_filter_equality.test',
              258 => 'tests/handlers/views_handler_filter_in_operator.test',
              259 => 'tests/handlers/views_handler_filter_numeric.test',
              260 => 'tests/handlers/views_handler_filter_string.test',
              261 => 'tests/handlers/views_handler_sort_random.test',
              262 => 'tests/handlers/views_handler_sort_date.test',
              263 => 'tests/handlers/views_handler_sort.test',
              264 => 'tests/test_handlers/views_test_area_access.inc',
              265 => 'tests/test_plugins/views_test_plugin_access_test_dynamic.inc',
              266 => 'tests/test_plugins/views_test_plugin_access_test_static.inc',
              267 => 'tests/test_plugins/views_test_plugin_style_test_mapping.inc',
              268 => 'tests/plugins/views_plugin_display.test',
              269 => 'tests/styles/views_plugin_style_jump_menu.test',
              270 => 'tests/styles/views_plugin_style.test',
              271 => 'tests/styles/views_plugin_style_base.test',
              272 => 'tests/styles/views_plugin_style_mapping.test',
              273 => 'tests/styles/views_plugin_style_unformatted.test',
              274 => 'tests/views_access.test',
              275 => 'tests/views_analyze.test',
              276 => 'tests/views_basic.test',
              277 => 'tests/views_argument_default.test',
              278 => 'tests/views_argument_validator.test',
              279 => 'tests/views_exposed_form.test',
              280 => 'tests/field/views_fieldapi.test',
              281 => 'tests/views_glossary.test',
              282 => 'tests/views_groupby.test',
              283 => 'tests/views_handlers.test',
              284 => 'tests/views_module.test',
              285 => 'tests/views_pager.test',
              286 => 'tests/views_plugin_localization_test.inc',
              287 => 'tests/views_translatable.test',
              288 => 'tests/views_query.test',
              289 => 'tests/views_upgrade.test',
              290 => 'tests/views_test.views_default.inc',
              291 => 'tests/comment/views_handler_argument_comment_user_uid.test',
              292 => 'tests/comment/views_handler_filter_comment_user_uid.test',
              293 => 'tests/node/views_node_revision_relations.test',
              294 => 'tests/taxonomy/views_handler_relationship_node_term_data.test',
              295 => 'tests/user/views_handler_field_user_name.test',
              296 => 'tests/user/views_user_argument_default.test',
              297 => 'tests/user/views_user_argument_validate.test',
              298 => 'tests/user/views_user.test',
              299 => 'tests/views_cache.test',
              300 => 'tests/views_view.test',
              301 => 'tests/views_ui.test',
            ),
            'version' => '7.x-3.8',
            'project' => 'views',
            'datestamp' => '1400618928',
          ),
          'schema_version' => '7301',
          'project' => 'views',
          'version' => '7.x-3.8',
        ),
        'references_dialog' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/references_dialog/references_dialog.module',
          'basename' => 'references_dialog.module',
          'name' => 'references_dialog',
          'info' => 
          array (
            'name' => 'References dialog',
            'description' => 'Enhances references fields by adding dialogs for adding and creating entities.',
            'package' => 'Fields',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'field',
              1 => 'views',
            ),
            'files' => 
            array (
              0 => 'views/references_dialog_plugin_display.inc',
            ),
            'version' => '7.x-1.0-alpha4',
            'project' => 'references_dialog',
            'datestamp' => '1338453702',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'references_dialog',
          'version' => '7.x-1.0-alpha4',
        ),
        'pathologic' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/pathologic/pathologic.module',
          'basename' => 'pathologic.module',
          'name' => 'pathologic',
          'info' => 
          array (
            'name' => 'Pathologic',
            'description' => 'Helps avoid broken links and incorrect paths in content.',
            'package' => 'Input filters',
            'dependencies' => 
            array (
              0 => 'filter',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'pathologic.test',
            ),
            'version' => '7.x-2.12',
            'project' => 'pathologic',
            'datestamp' => '1387055607',
            'php' => '5.2.4',
          ),
          'schema_version' => '7200',
          'project' => 'pathologic',
          'version' => '7.x-2.12',
        ),
        'token_test' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/token/tests/token_test.module',
          'basename' => 'token_test.module',
          'name' => 'token_test',
          'info' => 
          array (
            'name' => 'Token Test',
            'description' => 'Testing module for token functionality.',
            'package' => 'Testing',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'token_test.module',
            ),
            'hidden' => true,
            'version' => '7.x-1.5',
            'project' => 'token',
            'datestamp' => '1361665026',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'token',
          'version' => '7.x-1.5',
        ),
        'token' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/token/token.module',
          'basename' => 'token.module',
          'name' => 'token',
          'info' => 
          array (
            'name' => 'Token',
            'description' => 'Provides a user interface for the Token API and some missing core tokens.',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'token.test',
            ),
            'version' => '7.x-1.5',
            'project' => 'token',
            'datestamp' => '1361665026',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7001',
          'project' => 'token',
          'version' => '7.x-1.5',
        ),
        'plup' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/plup/plup.module',
          'basename' => 'plup.module',
          'name' => 'plup',
          'info' => 
          array (
            'name' => 'Plupload widget',
            'description' => 'Provides multiple upload functionality.',
            'dependencies' => 
            array (
              0 => 'libraries',
            ),
            'version' => '7.x-1.0-alpha1',
            'core' => '7.x',
            'project' => 'plup',
            'datestamp' => '1328449245',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'plup',
          'version' => '7.x-1.0-alpha1',
        ),
        'features_extra_test' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/features_extra/tests/features_extra_test.module',
          'basename' => 'features_extra_test.module',
          'name' => 'features_extra_test',
          'info' => 
          array (
            'name' => 'Features Extra test feature',
            'description' => 'Test feature for Features Extra.',
            'core' => '7.x',
            'package' => 'Testing',
            'php' => '5.2.4',
            'dependencies' => 
            array (
              0 => 'block_class',
              1 => 'fe_block',
              2 => 'fe_nodequeue',
            ),
            'features' => 
            array (
              'fe_block_boxes' => 
              array (
                0 => 'features_extra_test_block',
              ),
              'fe_block_settings' => 
              array (
                0 => 'block-features_extra_test_block',
              ),
              'fe_nodequeue' => 
              array (
                0 => 'features_extra_test_nodequeue',
              ),
              'features_api' => 
              array (
                0 => 'api:1',
              ),
            ),
            'version' => '7.x-1.0-beta1',
            'project' => 'features_extra',
            'datestamp' => '1366049112',
          ),
          'schema_version' => 0,
          'project' => 'features_extra',
          'version' => '7.x-1.0-beta1',
        ),
        'fe_profile' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/features_extra/fe_profile.module',
          'basename' => 'fe_profile.module',
          'name' => 'fe_profile',
          'info' => 
          array (
            'name' => 'FE Profile',
            'description' => 'Export profile field using features.',
            'core' => '7.x',
            'package' => 'Features extra',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'features',
              2 => 'profile',
            ),
            'version' => '7.x-1.0-beta1',
            'project' => 'features_extra',
            'datestamp' => '1366049112',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'features_extra',
          'version' => '7.x-1.0-beta1',
        ),
        'fe_block' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/features_extra/fe_block.module',
          'basename' => 'fe_block.module',
          'name' => 'fe_block',
          'info' => 
          array (
            'name' => 'FE Block',
            'description' => 'Build blocks and block settings as features.',
            'core' => '7.x',
            'package' => 'Features extra',
            'dependencies' => 
            array (
              0 => 'block',
              1 => 'ctools',
              2 => 'features',
            ),
            'test_dependencies' => 
            array (
              0 => 'block_class',
            ),
            'files' => 
            array (
              0 => 'tests/features_extra_test_case.test',
              1 => 'tests/fe_block.test',
            ),
            'version' => '7.x-1.0-beta1',
            'project' => 'features_extra',
            'datestamp' => '1366049112',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'features_extra',
          'version' => '7.x-1.0-beta1',
        ),
        'fe_nodequeue' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/modules/contrib/features_extra/fe_nodequeue.module',
          'basename' => 'fe_nodequeue.module',
          'name' => 'fe_nodequeue',
          'info' => 
          array (
            'name' => 'FE Nodequeue',
            'description' => 'Build nodequeues as features.',
            'core' => '7.x',
            'package' => 'Features extra',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'features',
              2 => 'nodequeue',
            ),
            'files' => 
            array (
              0 => 'tests/features_extra_test_case.test',
              1 => 'tests/fe_nodequeue.test',
            ),
            'version' => '7.x-1.0-beta1',
            'project' => 'features_extra',
            'datestamp' => '1366049112',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'features_extra',
          'version' => '7.x-1.0-beta1',
        ),
      ),
      'themes' => 
      array (
        'openchurch_theme' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/themes/openchurch_theme/openchurch_theme.info',
          'basename' => 'openchurch_theme.info',
          'name' => 'OpenChurch',
          'info' => 
          array (
            'name' => 'OpenChurch',
            'description' => 'OpenChurch (fusion) sub-theme. Requires <a href="http://drupal.org/project/fusion">Fusion Core</a> and the <a href="http://drupal.org/project/fusion_accelerator">Fusion Accelerator</a> module to enable easy point-and-click theming.',
            'base theme' => 'fusion_core',
            'core' => '7.x',
            'engine' => 'phptemplate',
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'css/openchurch-style.css',
                1 => 'css/openchurch-features.css',
              ),
            ),
            'scripts' => 
            array (
              0 => 'js/jquery.corner.js',
              1 => 'js/openchurch-script.js',
            ),
            'fusion' => 
            array (
              'api' => '2',
              'directory' => 'skins',
            ),
            'regions' => 
            array (
              'sidebar_first' => 'Sidebar first',
              'sidebar_second' => 'Sidebar second',
              'header_top' => 'Header top',
              'header' => 'Header',
              'main_menu' => 'Main menu',
              'preface_top' => 'Preface top',
              'preface_bottom' => 'Preface bottom',
              'content' => 'Content',
              'postscript_top' => 'Postscript top',
              'postscript_bottom' => 'Postscript bottom',
              'footer' => 'Footer',
              'node_top' => 'Node top',
              'node_bottom' => 'Node bottom',
              'help' => 'Help',
              'page_top' => 'Page top',
              'page_bottom' => 'Page bottom',
            ),
            'features' => 
            array (
              0 => 'logo',
              1 => 'name',
              2 => 'slogan',
              3 => 'node_user_picture',
              4 => 'comment_user_picture',
              5 => 'search',
              6 => 'favicon',
              7 => 'primary_links',
              8 => 'secondary_links',
            ),
            'settings' => 
            array (
              'theme_grid' => 'grid12-960',
              'theme_grid_options' => 
              array (
                0 => 'grid16-960',
                1 => 'grid16-fluid',
                2 => 'grid12-960',
                3 => 'grid12-fluid',
              ),
              'fluid_grid_width' => 'fluid-100',
              'theme_font' => 'none',
              'theme_font_size' => 'font-size-12',
              'breadcrumb_display' => '1',
              'search_snippet' => '1',
              'search_info_type' => '1',
              'search_info_user' => '1',
              'search_info_date' => '1',
              'search_info_comment' => '1',
              'search_info_upload' => '1',
              'grid_mask' => '1',
              'openchurch_theme_header_style' => 'oc-header-gray-bar',
              'responsive_enabled' => '1',
              'responsive_ie_shim' => '0',
              'responsive_columns' => '12',
              'responsive_displays' => 
              array (
                0 => 'sidebar',
                1 => 'sidebar_phone_landscape',
              ),
              'sidebar_enabled' => '1',
              'sidebar_layout' => 'sidebars-split',
              'sidebar_first_width' => '3',
              'sidebar_second_width' => '3',
              'sidebar_grid_width' => '960',
              'sidebar_gutter' => '20',
              'sidebar_mquery' => 'only screen and (min-width:461px)',
              'sidebar_mask' => 'rgba(0, 73, 225, .12)',
              'sidebar_tablet_landscape_enabled' => '0',
              'sidebar_tablet_landscape_layout' => 'sidebars-split',
              'sidebar_tablet_landscape_first_width' => '3',
              'sidebar_tablet_landscape_second_width' => '3',
              'sidebar_tablet_landscape_grid_width' => '960',
              'sidebar_tablet_landscape_gutter' => '20',
              'sidebar_tablet_landscape_mquery' => 'only screen and (max-device-width: 1024px) and (orientation:landscape), only screen and (min-width:960px) and (max-width:1199px) and (min-device-width: 1100px)',
              'sidebar_tablet_landscape_mask' => 'rgba(213,95,28,.15)',
              'sidebar_tablet_portrait_enabled' => '0',
              'sidebar_tablet_portrait_layout' => 'sidebars-split',
              'sidebar_tablet_portrait_first_width' => '3',
              'sidebar_tablet_portrait_second_width' => '3',
              'sidebar_tablet_portrait_grid_width' => '768',
              'sidebar_tablet_portrait_gutter' => '20',
              'sidebar_tablet_portrait_mquery' => 'only screen and (max-device-width: 1024px) and (orientation:portrait), only screen and (min-width:768px) and (max-width:959px) and (min-device-width: 1100px)',
              'sidebar_tablet_portrait_mask' => 'rgba(11,186,40,.15)',
              'sidebar_phone_landscape_enabled' => '1',
              'sidebar_phone_landscape_layout' => 'sidebars-drop',
              'sidebar_phone_landscape_first_width' => '3',
              'sidebar_phone_landscape_second_width' => '3',
              'sidebar_phone_landscape_grid_width' => 'mobile',
              'sidebar_phone_landscape_gutter' => '10',
              'sidebar_phone_landscape_mquery' => 'only screen and (max-width:460px)',
              'sidebar_phone_landscape_mask' => 'rgba(220,220,70,.1)',
              'grid_nested_regions' => 
              array (
                0 => 'sidebar_first',
                1 => 'sidebar_second',
                2 => 'header',
                3 => 'preface_bottom',
                4 => 'content',
                5 => 'postscript_top',
                6 => 'node_top',
                7 => 'node_bottom',
                8 => 'help',
              ),
              'grid_adjusted_regions' => 
              array (
                'preface_bottom' => 
                array (
                  0 => 'sidebar_first',
                ),
                'help' => 
                array (
                  0 => 'sidebar_first',
                  1 => 'sidebar_second',
                ),
                'content' => 
                array (
                  0 => 'sidebar_first',
                  1 => 'sidebar_second',
                ),
                'node_top' => 
                array (
                  0 => 'sidebar_first',
                  1 => 'sidebar_second',
                ),
                'node_bottom' => 
                array (
                  0 => 'sidebar_first',
                  1 => 'sidebar_second',
                ),
                'postscript_top' => 
                array (
                  0 => 'sidebar_first',
                ),
              ),
              'grid_adjusted_groups' => 
              array (
                'main_group' => 
                array (
                  0 => 'sidebar_first',
                ),
                'content_group' => 
                array (
                  0 => 'sidebar_first',
                  1 => 'sidebar_second',
                ),
              ),
              'grid_adjusted_regions_fluid' => 
              array (
                'sidebar_second' => 
                array (
                  0 => 'sidebar_first',
                ),
                'content' => 
                array (
                  0 => 'sidebar_first',
                  1 => 'sidebar_second',
                ),
              ),
              'grid_adjusted_groups_fluid' => 
              array (
                'content_group' => 
                array (
                  0 => 'sidebar_second',
                ),
              ),
            ),
            'fonts' => 
            array (
              'google_fonts_api' => 
              array (
                0 => 'Julius Sans One&subset=latin#regular',
              ),
            ),
            'version' => '7.x-1.0-beta7',
            'project' => 'openchurch_theme',
            'datestamp' => '1359827944',
          ),
          'project' => 'openchurch_theme',
          'version' => '7.x-1.0-beta7',
        ),
        'openchurch_mm' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/themes/openchurch_mm/openchurch_mm.info',
          'basename' => 'openchurch_mm.info',
          'name' => 'OpenChurch Mix and Match',
          'info' => 
          array (
            'name' => 'OpenChurch Mix and Match',
            'description' => 'OpenChurch (fusion) sub-theme. Requires <a href="http://drupal.org/project/fusion">Fusion Core</a> and the <a href="http://drupal.org/project/fusion_accelerator">Fusion Accelerator</a> module to enable easy point-and-click theming.',
            'base theme' => 'mix_and_match',
            'core' => '7.x',
            'engine' => 'phptemplate',
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'css/openchurch-style.css',
                1 => 'css/openchurch-features.css',
              ),
            ),
            'scripts' => 
            array (
              0 => 'js/jquery.corner.js',
              1 => 'js/openchurch-script.js',
            ),
            'fusion' => 
            array (
              'api' => '2',
              'directory' => 'skins',
            ),
            'regions' => 
            array (
              'sidebar_first' => 'Sidebar first',
              'sidebar_second' => 'Sidebar second',
              'header_top' => 'Header top',
              'header' => 'Header',
              'main_menu' => 'Main menu',
              'preface_top' => 'Preface top',
              'preface_bottom' => 'Preface bottom',
              'content' => 'Content',
              'postscript_top' => 'Postscript top',
              'postscript_bottom' => 'Postscript bottom',
              'footer' => 'Footer',
              'node_top' => 'Node top',
              'node_bottom' => 'Node bottom',
              'help' => 'Help',
              'page_top' => 'Page top',
              'page_bottom' => 'Page bottom',
            ),
            'features' => 
            array (
              0 => 'logo',
              1 => 'name',
              2 => 'slogan',
              3 => 'node_user_picture',
              4 => 'comment_user_picture',
              5 => 'favicon',
            ),
            'settings' => 
            array (
              'theme_grid' => 'grid12-960',
              'theme_grid_options' => 
              array (
                0 => 'grid16-960',
                1 => 'grid16-fluid',
                2 => 'grid12-960',
                3 => 'grid12-fluid',
              ),
              'fluid_grid_width' => 'fluid-100',
              'sidebar_layout' => 'sidebars-split',
              'sidebar_first_width' => '3',
              'sidebar_second_width' => '3',
              'theme_font' => 'none',
              'theme_font_size' => 'font-size-12',
              'breadcrumb_display' => '1',
              'search_snippet' => '1',
              'search_info_type' => '1',
              'search_info_user' => '1',
              'search_info_date' => '1',
              'search_info_comment' => '1',
              'search_info_upload' => '1',
              'block_config_link' => '1',
              'grid_mask' => '0',
              'mixnmatch_body_bg' => 'white',
              'mixnmatch_page_bg' => 'no-page-bg',
              'mixnmatch_accent_color' => 'gray-accents',
              'mixnmatch_site_title' => 'default-title',
              'mixnmatch_site_slogan' => 'default-slogan',
              'mixnmatch_header_color' => 'default-headers',
              'mixnmatch_link_color' => 'default-links',
              'grid_nested_regions' => 
              array (
                0 => 'sidebar_first',
                1 => 'sidebar_second',
                2 => 'header',
                3 => 'preface_bottom',
                4 => 'content',
                5 => 'postscript_top',
                6 => 'node_top',
                7 => 'node_bottom',
                8 => 'help',
              ),
              'grid_adjusted_regions' => 
              array (
                'preface_bottom' => 
                array (
                  0 => 'sidebar_first',
                ),
                'help' => 
                array (
                  0 => 'sidebar_first',
                  1 => 'sidebar_second',
                ),
                'content' => 
                array (
                  0 => 'sidebar_first',
                  1 => 'sidebar_second',
                ),
                'node_top' => 
                array (
                  0 => 'sidebar_first',
                  1 => 'sidebar_second',
                ),
                'node_bottom' => 
                array (
                  0 => 'sidebar_first',
                  1 => 'sidebar_second',
                ),
                'postscript_top' => 
                array (
                  0 => 'sidebar_first',
                ),
              ),
              'grid_adjusted_groups' => 
              array (
                'main_group' => 
                array (
                  0 => 'sidebar_first',
                ),
                'content_group' => 
                array (
                  0 => 'sidebar_first',
                  1 => 'sidebar_second',
                ),
              ),
              'grid_adjusted_regions_fluid' => 
              array (
                'sidebar_second' => 
                array (
                  0 => 'sidebar_first',
                ),
                'content' => 
                array (
                  0 => 'sidebar_first',
                  1 => 'sidebar_second',
                ),
              ),
              'grid_adjusted_groups_fluid' => 
              array (
                'content_group' => 
                array (
                  0 => 'sidebar_second',
                ),
              ),
              'responsive_enabled' => '1',
              'responsive_ie_shim' => '0',
              'responsive_columns' => '12',
              'responsive_displays' => 
              array (
                0 => 'sidebar',
                1 => 'sidebar_phone_landscape',
              ),
              'sidebar_enabled' => '1',
              'sidebar_grid_width' => '960',
              'sidebar_gutter' => '20',
              'sidebar_mquery' => 'only screen and (min-width:461px)',
              'sidebar_mask' => 'rgba(0, 73, 225, .12)',
              'sidebar_tablet_landscape_enabled' => '0',
              'sidebar_tablet_landscape_layout' => 'sidebars-split',
              'sidebar_tablet_landscape_first_width' => '3',
              'sidebar_tablet_landscape_second_width' => '3',
              'sidebar_tablet_landscape_grid_width' => '960',
              'sidebar_tablet_landscape_gutter' => '20',
              'sidebar_tablet_landscape_mquery' => 'only screen and (max-device-width: 1024px) and (orientation:landscape), only screen and (min-width:960px) and (max-width:1199px) and (min-device-width: 1100px)',
              'sidebar_tablet_landscape_mask' => 'rgba(213,95,28,.15)',
              'sidebar_tablet_portrait_enabled' => '0',
              'sidebar_tablet_portrait_layout' => 'sidebars-split',
              'sidebar_tablet_portrait_first_width' => '3',
              'sidebar_tablet_portrait_second_width' => '3',
              'sidebar_tablet_portrait_grid_width' => '768',
              'sidebar_tablet_portrait_gutter' => '20',
              'sidebar_tablet_portrait_mquery' => 'only screen and (max-device-width: 1024px) and (orientation:portrait), only screen and (min-width:768px) and (max-width:959px) and (min-device-width: 1100px)',
              'sidebar_tablet_portrait_mask' => 'rgba(11,186,40,.15)',
              'sidebar_phone_landscape_enabled' => '1',
              'sidebar_phone_landscape_layout' => 'sidebars-drop',
              'sidebar_phone_landscape_first_width' => '3',
              'sidebar_phone_landscape_second_width' => '3',
              'sidebar_phone_landscape_grid_width' => 'mobile',
              'sidebar_phone_landscape_gutter' => '10',
              'sidebar_phone_landscape_mquery' => 'only screen and (max-width:460px)',
              'sidebar_phone_landscape_mask' => 'rgba(220,220,70,.1)',
            ),
            'version' => '7.x-1.11-beta8',
            'project' => 'openchurch',
            'datestamp' => '1359936580',
          ),
          'project' => 'openchurch',
          'version' => '7.x-1.11-beta8',
        ),
        'openchurch_theme_starter' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/themes/openchurch_theme_starter/openchurch_theme_starter.info',
          'basename' => 'openchurch_theme_starter.info',
          'name' => 'OpenChurch Starter',
          'info' => 
          array (
            'name' => 'OpenChurch Starter',
            'description' => 'OpenChurch Starter (fusion) sub-theme. Requires <a href="http://drupal.org/project/fusion">Fusion Core</a> and the <a href="http://drupal.org/project/fusion_accelerator">Fusion Accelerator</a> module to enable easy point-and-click theming.',
            'base theme' => 'openchurch_theme',
            'core' => '7.x',
            'engine' => 'phptemplate',
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'css/openchurch-theme-starter.css',
              ),
            ),
            'fusion' => 
            array (
              'api' => '2',
              'directory' => 'skins',
            ),
            'regions' => 
            array (
              'sidebar_first' => 'Sidebar first',
              'sidebar_second' => 'Sidebar second',
              'header_top' => 'Header top',
              'header' => 'Header',
              'main_menu' => 'Main menu',
              'preface_top' => 'Preface top',
              'preface_bottom' => 'Preface bottom',
              'content' => 'Content',
              'postscript_top' => 'Postscript top',
              'postscript_bottom' => 'Postscript bottom',
              'footer' => 'Footer',
              'node_top' => 'Node top',
              'node_bottom' => 'Node bottom',
              'help' => 'Help',
              'page_top' => 'Page top',
              'page_bottom' => 'Page bottom',
            ),
            'features' => 
            array (
              0 => 'logo',
              1 => 'name',
              2 => 'slogan',
              3 => 'node_user_picture',
              4 => 'comment_user_picture',
              5 => 'search',
              6 => 'favicon',
              7 => 'primary_links',
              8 => 'secondary_links',
            ),
            'settings' => 
            array (
              'theme_grid' => 'grid12-960',
              'theme_grid_options' => 
              array (
                0 => 'grid16-960',
                1 => 'grid16-fluid',
                2 => 'grid12-960',
                3 => 'grid12-fluid',
              ),
              'fluid_grid_width' => 'fluid-100',
              'theme_font' => 'none',
              'theme_font_size' => 'font-size-12',
              'breadcrumb_display' => '1',
              'search_snippet' => '1',
              'search_info_type' => '1',
              'search_info_user' => '1',
              'search_info_date' => '1',
              'search_info_comment' => '1',
              'search_info_upload' => '1',
              'grid_mask' => '1',
              'responsive_enabled' => '1',
              'responsive_ie_shim' => '0',
              'responsive_columns' => '12',
              'responsive_displays' => 
              array (
                0 => 'sidebar',
                1 => 'sidebar_tablet_landscape',
                2 => 'sidebar_tablet_portrait',
                3 => 'sidebar_phone_landscape',
              ),
              'sidebar_enabled' => '1',
              'sidebar_layout' => 'sidebars-split',
              'sidebar_first_width' => '3',
              'sidebar_second_width' => '3',
              'sidebar_grid_width' => '960',
              'sidebar_gutter' => '20',
              'sidebar_mquery' => 'only screen and (min-width:461px)',
              'sidebar_mask' => 'rgba(0, 73, 225, .12)',
              'sidebar_tablet_landscape_enabled' => '0',
              'sidebar_tablet_landscape_layout' => 'sidebars-split',
              'sidebar_tablet_landscape_first_width' => '3',
              'sidebar_tablet_landscape_second_width' => '3',
              'sidebar_tablet_landscape_grid_width' => '960',
              'sidebar_tablet_landscape_gutter' => '20',
              'sidebar_tablet_landscape_mquery' => 'only screen and (max-device-width: 1024px) and (orientation:landscape), only screen and (min-width:960px) and (max-width:1199px) and (min-device-width: 1100px)',
              'sidebar_tablet_landscape_mask' => 'rgba(213,95,28,.15)',
              'sidebar_tablet_portrait_enabled' => '0',
              'sidebar_tablet_portrait_layout' => 'sidebars-split',
              'sidebar_tablet_portrait_first_width' => '3',
              'sidebar_tablet_portrait_second_width' => '3',
              'sidebar_tablet_portrait_grid_width' => '768',
              'sidebar_tablet_portrait_gutter' => '20',
              'sidebar_tablet_portrait_mquery' => 'only screen and (max-device-width: 1024px) and (orientation:portrait), only screen and (min-width:768px) and (max-width:959px) and (min-device-width: 1100px)',
              'sidebar_tablet_portrait_mask' => 'rgba(11,186,40,.15)',
              'sidebar_phone_landscape_enabled' => '1',
              'sidebar_phone_landscape_layout' => 'sidebars-drop',
              'sidebar_phone_landscape_first_width' => '3',
              'sidebar_phone_landscape_second_width' => '3',
              'sidebar_phone_landscape_grid_width' => 'mobile',
              'sidebar_phone_landscape_gutter' => '10',
              'sidebar_phone_landscape_mquery' => 'only screen and (max-width:460px)',
              'sidebar_phone_landscape_mask' => 'rgba(220,220,70,.1)',
              'grid_nested_regions' => 
              array (
                0 => 'sidebar_first',
                1 => 'sidebar_second',
                2 => 'header',
                3 => 'preface_bottom',
                4 => 'content',
                5 => 'postscript_top',
                6 => 'node_top',
                7 => 'node_bottom',
                8 => 'help',
              ),
              'grid_adjusted_regions' => 
              array (
                'preface_bottom' => 
                array (
                  0 => 'sidebar_first',
                ),
                'help' => 
                array (
                  0 => 'sidebar_first',
                  1 => 'sidebar_second',
                ),
                'content' => 
                array (
                  0 => 'sidebar_first',
                  1 => 'sidebar_second',
                ),
                'node_top' => 
                array (
                  0 => 'sidebar_first',
                  1 => 'sidebar_second',
                ),
                'node_bottom' => 
                array (
                  0 => 'sidebar_first',
                  1 => 'sidebar_second',
                ),
                'postscript_top' => 
                array (
                  0 => 'sidebar_first',
                ),
              ),
              'grid_adjusted_groups' => 
              array (
                'main_group' => 
                array (
                  0 => 'sidebar_first',
                ),
                'content_group' => 
                array (
                  0 => 'sidebar_first',
                  1 => 'sidebar_second',
                ),
              ),
              'grid_adjusted_regions_fluid' => 
              array (
                'sidebar_second' => 
                array (
                  0 => 'sidebar_first',
                ),
                'content' => 
                array (
                  0 => 'sidebar_first',
                  1 => 'sidebar_second',
                ),
              ),
              'grid_adjusted_groups_fluid' => 
              array (
                'content_group' => 
                array (
                  0 => 'sidebar_second',
                ),
              ),
            ),
            'fonts' => 
            array (
              'google_fonts_api' => 
              array (
                0 => 'Neuton&subset=latin#regular',
              ),
            ),
            'version' => '7.x-1.11-beta8',
            'project' => 'openchurch',
            'datestamp' => '1359936580',
          ),
          'project' => 'openchurch',
          'version' => '7.x-1.11-beta8',
        ),
        'mix_and_match' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/themes/mix_and_match/mix_and_match.info',
          'basename' => 'mix_and_match.info',
          'name' => 'Mix and Match',
          'info' => 
          array (
            'name' => 'Mix and Match',
            'description' => 'A highly customizable Fusion sub-theme with multiple color combinations.',
            'base theme' => 'fusion_core',
            'core' => '7.x',
            'engine' => 'phptemplate',
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'css/mix-and-match-style.css',
                1 => 'css/base-colors.css',
                2 => 'css/mix-and-match-skins.css',
              ),
            ),
            'skinr' => 
            array (
              'api' => '2',
            ),
            'regions' => 
            array (
              'sidebar_first' => 'Sidebar first',
              'sidebar_second' => 'Sidebar second',
              'header_top' => 'Header top',
              'header' => 'Header',
              'main_menu' => 'Main menu',
              'preface_top' => 'Preface top',
              'preface_bottom' => 'Preface bottom',
              'content' => 'Content',
              'postscript_top' => 'Postscript top',
              'postscript_bottom' => 'Postscript bottom',
              'footer' => 'Footer',
              'node_top' => 'Node top',
              'node_bottom' => 'Node bottom',
              'help' => 'Help',
              'page_top' => 'Page top',
              'page_bottom' => 'Page bottom',
            ),
            'features' => 
            array (
              0 => 'logo',
              1 => 'name',
              2 => 'slogan',
              3 => 'node_user_picture',
              4 => 'comment_user_picture',
              5 => 'favicon',
            ),
            'settings' => 
            array (
              'theme_grid' => 'grid16-960',
              'theme_grid_options' => 
              array (
                0 => 'grid16-960',
                1 => 'grid16-fluid',
                2 => 'grid12-960',
                3 => 'grid12-fluid',
              ),
              'fluid_grid_width' => 'fluid-100',
              'sidebar_layout' => 'sidebars-split',
              'sidebar_first_width' => '3',
              'sidebar_second_width' => '3',
              'theme_font' => 'none',
              'theme_font_size' => 'font-size-13',
              'breadcrumb_display' => '1',
              'search_snippet' => '1',
              'search_info_type' => '1',
              'search_info_user' => '1',
              'search_info_date' => '1',
              'search_info_comment' => '1',
              'search_info_upload' => '1',
              'block_config_link' => '1',
              'grid_mask' => '0',
              'mixnmatch_body_bg' => 'white',
              'mixnmatch_page_bg' => 'no-page-bg',
              'mixnmatch_accent_color' => 'gray-accents',
              'mixnmatch_site_title' => 'default-title',
              'mixnmatch_site_slogan' => 'default-slogan',
              'mixnmatch_header_color' => 'default-headers',
              'mixnmatch_link_color' => 'default-links',
              'grid_nested_regions' => 
              array (
                0 => 'sidebar_first',
                1 => 'sidebar_second',
                2 => 'header',
                3 => 'preface_bottom',
                4 => 'content',
                5 => 'postscript_top',
                6 => 'node_top',
                7 => 'node_bottom',
                8 => 'help',
              ),
              'grid_adjusted_regions' => 
              array (
                'preface_bottom' => 
                array (
                  0 => 'sidebar_first',
                ),
                'help' => 
                array (
                  0 => 'sidebar_first',
                  1 => 'sidebar_second',
                ),
                'content' => 
                array (
                  0 => 'sidebar_first',
                  1 => 'sidebar_second',
                ),
                'node_top' => 
                array (
                  0 => 'sidebar_first',
                  1 => 'sidebar_second',
                ),
                'node_bottom' => 
                array (
                  0 => 'sidebar_first',
                  1 => 'sidebar_second',
                ),
                'postscript_top' => 
                array (
                  0 => 'sidebar_first',
                ),
              ),
              'grid_adjusted_groups' => 
              array (
                'main_group' => 
                array (
                  0 => 'sidebar_first',
                ),
                'content_group' => 
                array (
                  0 => 'sidebar_first',
                  1 => 'sidebar_second',
                ),
              ),
              'grid_adjusted_regions_fluid' => 
              array (
                'sidebar_second' => 
                array (
                  0 => 'sidebar_first',
                ),
                'content' => 
                array (
                  0 => 'sidebar_first',
                  1 => 'sidebar_second',
                ),
              ),
              'grid_adjusted_groups_fluid' => 
              array (
                'content_group' => 
                array (
                  0 => 'sidebar_second',
                ),
              ),
            ),
            'version' => '7.x-1.0',
            'project' => 'mix_and_match',
            'datestamp' => '1318707999',
          ),
          'project' => 'mix_and_match',
          'version' => '7.x-1.0',
        ),
        'fusion_starter_lite' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/themes/fusion/fusion_starter_lite/fusion_starter_lite.info',
          'basename' => 'fusion_starter_lite.info',
          'name' => 'Fusion Starter Lite',
          'info' => 
          array (
            'name' => 'Fusion Starter Lite',
            'description' => 'A Fusion starter theme with fewer regions and less markup.  Requires <a href="http://drupal.org/project/fusion">Fusion Core</a> and the <a href="http://drupal.org/project/fusion_accelerator">Fusion Accelerator</a> suite to enable easy point-and-click theming.',
            'base theme' => 'fusion_core',
            'core' => '7.x',
            'engine' => 'phptemplate',
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'css/fusion-starter-lite-style.css',
              ),
            ),
            'fusion' => 
            array (
              'api' => '2',
              'directory' => 'skins',
            ),
            'regions' => 
            array (
              'sidebar_first' => 'Sidebar first',
              'sidebar_second' => 'Sidebar second',
              'header' => 'Header',
              'main_menu' => 'Main menu',
              'content' => 'Content',
              'footer' => 'Footer',
              'help' => 'Help',
            ),
            'features' => 
            array (
              0 => 'logo',
              1 => 'name',
              2 => 'slogan',
              3 => 'node_user_picture',
              4 => 'comment_user_picture',
              5 => 'favicon',
            ),
            'settings' => 
            array (
              'theme_grid' => 'grid12-960',
              'theme_grid_options' => 
              array (
                0 => 'grid12-960',
                1 => 'grid12-fluid',
              ),
              'fluid_grid_width' => 'fluid-100',
              'theme_font' => 'none',
              'theme_font_size' => 'font-size-13',
              'breadcrumb_display' => '1',
              'search_snippet' => '1',
              'search_info_type' => '1',
              'search_info_user' => '1',
              'search_info_date' => '1',
              'search_info_comment' => '1',
              'search_info_upload' => '1',
              'grid_mask' => '1',
              'responsive_enabled' => '1',
              'responsive_ie_shim' => '1',
              'responsive_columns' => '12',
              'responsive_displays' => 
              array (
                0 => 'sidebar',
                1 => 'sidebar_tablet_landscape',
                2 => 'sidebar_tablet_portrait',
                3 => 'sidebar_phone_landscape',
              ),
              'sidebar_enabled' => '1',
              'sidebar_layout' => 'sidebars-split',
              'sidebar_first_width' => '3',
              'sidebar_second_width' => '3',
              'sidebar_grid_width' => '1200',
              'sidebar_gutter' => '30',
              'sidebar_mquery' => 'only screen and (min-width:1200px)',
              'sidebar_mask' => 'rgba(0, 73, 225, .12)',
              'sidebar_tablet_landscape_enabled' => '1',
              'sidebar_tablet_landscape_layout' => 'sidebars-split',
              'sidebar_tablet_landscape_first_width' => '3',
              'sidebar_tablet_landscape_second_width' => '3',
              'sidebar_tablet_landscape_grid_width' => '960',
              'sidebar_tablet_landscape_gutter' => '20',
              'sidebar_tablet_landscape_mquery' => 'only screen and (max-device-width: 1024px) and (orientation:landscape), only screen and (min-width:960px) and (max-width:1199px) and (min-device-width: 1100px)',
              'sidebar_tablet_landscape_mask' => 'rgba(213,95,28,.15)',
              'sidebar_tablet_portrait_enabled' => '1',
              'sidebar_tablet_portrait_layout' => 'sidebars-split',
              'sidebar_tablet_portrait_first_width' => '3',
              'sidebar_tablet_portrait_second_width' => '3',
              'sidebar_tablet_portrait_grid_width' => '768',
              'sidebar_tablet_portrait_gutter' => '20',
              'sidebar_tablet_portrait_mquery' => 'only screen and (max-device-width: 1024px) and (orientation:portrait), only screen and (min-width:768px) and (max-width:959px) and (min-device-width: 1100px)',
              'sidebar_tablet_portrait_mask' => 'rgba(11,186,40,.15)',
              'sidebar_phone_landscape_enabled' => '1',
              'sidebar_phone_landscape_layout' => 'sidebars-drop',
              'sidebar_phone_landscape_first_width' => '3',
              'sidebar_phone_landscape_second_width' => '3',
              'sidebar_phone_landscape_grid_width' => 'mobile',
              'sidebar_phone_landscape_gutter' => '10',
              'sidebar_phone_landscape_mquery' => 'only screen and (max-width:759px)',
              'sidebar_phone_landscape_mask' => 'rgba(220,220,70,.1)',
              'grid_nested_regions' => 
              array (
                0 => 'sidebar_first',
                1 => 'sidebar_second',
                2 => 'header',
                3 => 'content',
                4 => 'help',
              ),
              'grid_adjusted_regions' => 
              array (
                'help' => 
                array (
                  0 => 'sidebar_first',
                  1 => 'sidebar_second',
                ),
                'content' => 
                array (
                  0 => 'sidebar_first',
                  1 => 'sidebar_second',
                ),
              ),
              'grid_adjusted_groups' => 
              array (
                'content_group' => 
                array (
                  0 => 'sidebar_first',
                  1 => 'sidebar_second',
                ),
              ),
              'grid_adjusted_regions_fluid' => 
              array (
                'sidebar_second' => 
                array (
                  0 => 'sidebar_first',
                ),
                'content' => 
                array (
                  0 => 'sidebar_first',
                  1 => 'sidebar_second',
                ),
              ),
              'grid_adjusted_groups_fluid' => 
              array (
                'content_group' => 
                array (
                  0 => 'sidebar_second',
                ),
              ),
            ),
            'version' => '7.x-2.0-beta2',
            'project' => 'fusion',
            'datestamp' => '1332517846',
          ),
          'project' => 'fusion',
          'version' => '7.x-2.0-beta2',
        ),
        'fusion_core' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/themes/fusion/fusion_core/fusion_core.info',
          'basename' => 'fusion_core.info',
          'name' => 'Fusion Core',
          'info' => 
          array (
            'name' => 'Fusion Core',
            'description' => '<a href="http://drupal.org/project/fusion">Fusion Core</a> is the grid-enabled base theme for powerful sub-themes.  With the <a href="http://drupal.org/project/fusion_accelerator">Fusion Accelerator</a> module, it enables easy point-and-click theming. By <a href="http://www.topnotchthemes.com">TopNotchThemes</a>',
            'core' => '7.x',
            'engine' => 'phptemplate',
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'css/fusion-style.css',
                1 => 'css/fusion-typography.css',
                2 => 'skins/core/fusion-core-skins.css',
              ),
            ),
            'fusion' => 
            array (
              'api' => '2',
              'directory' => 'skins',
            ),
            'scripts' => 
            array (
              0 => 'js/script.js',
            ),
            'regions' => 
            array (
              'sidebar_first' => 'Sidebar first',
              'sidebar_second' => 'Sidebar second',
              'header_top' => 'Header top',
              'header' => 'Header',
              'main_menu' => 'Main menu',
              'preface_top' => 'Preface top',
              'preface_bottom' => 'Preface bottom',
              'content' => 'Content',
              'postscript_top' => 'Postscript top',
              'postscript_bottom' => 'Postscript bottom',
              'footer' => 'Footer',
              'node_top' => 'Node top',
              'node_bottom' => 'Node bottom',
              'help' => 'Help',
              'page_top' => 'Page top',
              'page_bottom' => 'Page bottom',
            ),
            'features' => 
            array (
              0 => 'logo',
              1 => 'name',
              2 => 'slogan',
              3 => 'node_user_picture',
              4 => 'comment_user_picture',
              5 => 'favicon',
            ),
            'settings' => 
            array (
              'theme_grid' => 'grid16-960',
              'theme_grid_options' => 
              array (
                0 => 'grid16-960',
                1 => 'grid16-fluid',
                2 => 'grid12-960',
                3 => 'grid12-fluid',
              ),
              'fluid_grid_width' => 'fluid-100',
              'sidebar_layout' => 'sidebars-split',
              'sidebar_first_width' => '3',
              'sidebar_second_width' => '3',
              'theme_font' => 'none',
              'theme_font_size' => 'font-size-13',
              'breadcrumb_display' => '1',
              'search_snippet' => '1',
              'search_info_type' => '1',
              'search_info_user' => '1',
              'search_info_date' => '1',
              'search_info_comment' => '1',
              'search_info_upload' => '1',
              'block_config_link' => '1',
              'grid_mask' => '0',
              'grid_nested_regions' => 
              array (
                0 => 'sidebar_first',
                1 => 'sidebar_second',
                2 => 'header',
                3 => 'preface_bottom',
                4 => 'content',
                5 => 'postscript_top',
                6 => 'node_top',
                7 => 'node_bottom',
                8 => 'help',
              ),
              'grid_adjusted_regions' => 
              array (
                'preface_bottom' => 
                array (
                  0 => 'sidebar_first',
                ),
                'help' => 
                array (
                  0 => 'sidebar_first',
                  1 => 'sidebar_second',
                ),
                'content' => 
                array (
                  0 => 'sidebar_first',
                  1 => 'sidebar_second',
                ),
                'node_top' => 
                array (
                  0 => 'sidebar_first',
                  1 => 'sidebar_second',
                ),
                'node_bottom' => 
                array (
                  0 => 'sidebar_first',
                  1 => 'sidebar_second',
                ),
                'postscript_top' => 
                array (
                  0 => 'sidebar_first',
                ),
              ),
              'grid_adjusted_groups' => 
              array (
                'main_group' => 
                array (
                  0 => 'sidebar_first',
                ),
                'content_group' => 
                array (
                  0 => 'sidebar_first',
                  1 => 'sidebar_second',
                ),
              ),
              'grid_adjusted_regions_fluid' => 
              array (
                'sidebar_second' => 
                array (
                  0 => 'sidebar_first',
                ),
                'content' => 
                array (
                  0 => 'sidebar_first',
                  1 => 'sidebar_second',
                ),
              ),
              'grid_adjusted_groups_fluid' => 
              array (
                'content_group' => 
                array (
                  0 => 'sidebar_second',
                ),
              ),
            ),
            'version' => '7.x-2.0-beta2',
            'project' => 'fusion',
            'datestamp' => '1332517846',
          ),
          'project' => 'fusion',
          'version' => '7.x-2.0-beta2',
        ),
        'fusion_starter' => 
        array (
          'filename' => '/data/disk/v4643649448/static/qasstl_org/profiles/openchurch/themes/fusion/fusion_starter/fusion_starter.info',
          'basename' => 'fusion_starter.info',
          'name' => 'Fusion Starter',
          'info' => 
          array (
            'name' => 'Fusion Starter',
            'description' => 'A fully featured Fusion starter theme.  Requires <a href="http://drupal.org/project/fusion">Fusion Core</a> and the <a href="http://drupal.org/project/fusion_accelerator">Fusion Accelerator</a> suite to enable easy point-and-click theming.',
            'base theme' => 'fusion_core',
            'core' => '7.x',
            'engine' => 'phptemplate',
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'css/fusion-starter-style.css',
              ),
            ),
            'fusion' => 
            array (
              'api' => '2',
              'directory' => 'skins',
            ),
            'regions' => 
            array (
              'sidebar_first' => 'Sidebar first',
              'sidebar_second' => 'Sidebar second',
              'header_top' => 'Header top',
              'header' => 'Header',
              'main_menu' => 'Main menu',
              'preface_top' => 'Preface top',
              'preface_bottom' => 'Preface bottom',
              'content' => 'Content',
              'postscript_top' => 'Postscript top',
              'postscript_bottom' => 'Postscript bottom',
              'footer' => 'Footer',
              'node_top' => 'Node top',
              'node_bottom' => 'Node bottom',
              'help' => 'Help',
              'page_top' => 'Page top',
              'page_bottom' => 'Page bottom',
            ),
            'features' => 
            array (
              0 => 'logo',
              1 => 'name',
              2 => 'slogan',
              3 => 'node_user_picture',
              4 => 'comment_user_picture',
              5 => 'favicon',
            ),
            'settings' => 
            array (
              'theme_grid' => 'grid12-960',
              'theme_grid_options' => 
              array (
                0 => 'grid16-960',
                1 => 'grid16-fluid',
                2 => 'grid12-960',
                3 => 'grid12-fluid',
              ),
              'fluid_grid_width' => 'fluid-100',
              'theme_font' => 'none',
              'theme_font_size' => 'font-size-13',
              'breadcrumb_display' => '1',
              'search_snippet' => '1',
              'search_info_type' => '1',
              'search_info_user' => '1',
              'search_info_date' => '1',
              'search_info_comment' => '1',
              'search_info_upload' => '1',
              'grid_mask' => '1',
              'responsive_enabled' => '1',
              'responsive_ie_shim' => '1',
              'responsive_columns' => '12',
              'responsive_displays' => 
              array (
                0 => 'sidebar',
                1 => 'sidebar_tablet_landscape',
                2 => 'sidebar_tablet_portrait',
                3 => 'sidebar_phone_landscape',
              ),
              'sidebar_enabled' => '1',
              'sidebar_layout' => 'sidebars-split',
              'sidebar_first_width' => '3',
              'sidebar_second_width' => '3',
              'sidebar_grid_width' => '1200',
              'sidebar_gutter' => '30',
              'sidebar_mquery' => 'only screen and (min-width:1200px)',
              'sidebar_mask' => 'rgba(0, 73, 225, .12)',
              'sidebar_tablet_landscape_enabled' => '1',
              'sidebar_tablet_landscape_layout' => 'sidebars-split',
              'sidebar_tablet_landscape_first_width' => '3',
              'sidebar_tablet_landscape_second_width' => '3',
              'sidebar_tablet_landscape_grid_width' => '960',
              'sidebar_tablet_landscape_gutter' => '20',
              'sidebar_tablet_landscape_mquery' => 'only screen and (max-device-width: 1024px) and (orientation:landscape), only screen and (min-width:960px) and (max-width:1199px) and (min-device-width: 1100px)',
              'sidebar_tablet_landscape_mask' => 'rgba(213,95,28,.15)',
              'sidebar_tablet_portrait_enabled' => '1',
              'sidebar_tablet_portrait_layout' => 'sidebars-split',
              'sidebar_tablet_portrait_first_width' => '3',
              'sidebar_tablet_portrait_second_width' => '3',
              'sidebar_tablet_portrait_grid_width' => '768',
              'sidebar_tablet_portrait_gutter' => '20',
              'sidebar_tablet_portrait_mquery' => 'only screen and (max-device-width: 1024px) and (orientation:portrait), only screen and (min-width:768px) and (max-width:959px) and (min-device-width: 1100px)',
              'sidebar_tablet_portrait_mask' => 'rgba(11,186,40,.15)',
              'sidebar_phone_landscape_enabled' => '1',
              'sidebar_phone_landscape_layout' => 'sidebars-drop',
              'sidebar_phone_landscape_first_width' => '3',
              'sidebar_phone_landscape_second_width' => '3',
              'sidebar_phone_landscape_grid_width' => 'mobile',
              'sidebar_phone_landscape_gutter' => '10',
              'sidebar_phone_landscape_mquery' => 'only screen and (max-width:759px)',
              'sidebar_phone_landscape_mask' => 'rgba(220,220,70,.1)',
              'grid_nested_regions' => 
              array (
                0 => 'sidebar_first',
                1 => 'sidebar_second',
                2 => 'header',
                3 => 'preface_bottom',
                4 => 'content',
                5 => 'postscript_top',
                6 => 'node_top',
                7 => 'node_bottom',
                8 => 'help',
              ),
              'grid_adjusted_regions' => 
              array (
                'preface_bottom' => 
                array (
                  0 => 'sidebar_first',
                ),
                'help' => 
                array (
                  0 => 'sidebar_first',
                  1 => 'sidebar_second',
                ),
                'content' => 
                array (
                  0 => 'sidebar_first',
                  1 => 'sidebar_second',
                ),
                'node_top' => 
                array (
                  0 => 'sidebar_first',
                  1 => 'sidebar_second',
                ),
                'node_bottom' => 
                array (
                  0 => 'sidebar_first',
                  1 => 'sidebar_second',
                ),
                'postscript_top' => 
                array (
                  0 => 'sidebar_first',
                ),
              ),
              'grid_adjusted_groups' => 
              array (
                'main_group' => 
                array (
                  0 => 'sidebar_first',
                ),
                'content_group' => 
                array (
                  0 => 'sidebar_first',
                  1 => 'sidebar_second',
                ),
              ),
              'grid_adjusted_regions_fluid' => 
              array (
                'sidebar_second' => 
                array (
                  0 => 'sidebar_first',
                ),
                'content' => 
                array (
                  0 => 'sidebar_first',
                  1 => 'sidebar_second',
                ),
              ),
              'grid_adjusted_groups_fluid' => 
              array (
                'content_group' => 
                array (
                  0 => 'sidebar_second',
                ),
              ),
            ),
            'version' => '7.x-2.0-beta2',
            'project' => 'fusion',
            'datestamp' => '1332517846',
          ),
          'project' => 'fusion',
          'version' => '7.x-2.0-beta2',
        ),
      ),
    ),
  ),
);