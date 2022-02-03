<?PHP
Context::set(NULL,'index.php');
Context::set('Dashboard','_dash.php');
Context::set('Home','_home.php');
Context::set('Report','_report.php');
Context::set('Invoice','_invoice.php');
Context::set('Mail','_mail.php');

Context::set('View Ledgers (CR)','view_ledgers_cr.php');
Context::set('View Ledgers (DR)','view_ledgers_dr.php');
Context::set('Edit Ledger','edit_ledger.php');

Context::set('View Contacts','view_contacts.php');
Context::set('Edit Contact','edit_contact.php');

Context::set('View Users','view_users.php');
Context::set('View User','view_user.php');
Context::set('Edit User','edit_user.php');
Context::set('Add User','add_user.php');

Context::set('Profile','profile.php');
Context::set('Change Password','password.php');

Context::set('View Admins','view_admins.php');
Context::set('Edit Admin','edit_admin.php');
Context::set('Add Admin','add_admin.php');

Context::set('View Tickets','view_tickets.php');
Context::set('Edit Ticket','edit_ticket.php');
Context::set('Add Ticket','add_ticket.php');

Context::set('Software License Expired!','anum.php');

//Context::map();
extract(Context::get());
?>
