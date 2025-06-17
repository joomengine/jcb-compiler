### JCB! Power
# class Model (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Service**

```uml
@startuml

class Model  #Gold {
  # $targetVersion
  + register(Container $container) : void
  + getServerLoad(Container $container) : ServerLoad
  + getJoomlaplugins(Container $container) : Joomlaplugins
  + getJoomlamodules(Container $container) : Joomlamodules
  + getHistorycomponent(Container $container) : Historycomponent
  + getCustomadminviews(Container $container) : Customadminviews
  + getAjaxcustomview(Container $container) : Ajaxcustomview
  + getJavascriptcustomview(Container $container) : Javascriptcustomview
  + getCsscustomview(Container $container) : Csscustomview
  + getPhpcustomview(Container $container) : Phpcustomview
  + getDynamicget(Container $container) : Dynamicget
  + getLibraries(Container $container) : Libraries
  + getSiteviews(Container $container) : Siteviews
  + getPermissions(Container $container) : Permissions
  + getHistoryadminview(Container $container) : Historyadminview
  + getMysqlsettings(Container $container) : Mysqlsettings
  + getSql(Container $container) : Sql
  + getCustomalias(Container $container) : Customalias
  + getAjaxadmin(Container $container) : Ajaxadmin
  + getCustomimportscripts(Container $container) : Customimportscripts
  + getCustombuttons(Container $container) : Custombuttons
  + getLoader(Container $container) : Loader
  + getPhpadminview(Container $container) : Phpadminview
  + getCssadminview(Container $container) : Cssadminview
  + getJavascriptadminview(Container $container) : Javascriptadminview
  + getLinkedviews(Container $container) : Linkedviews
  + getRelations(Container $container) : Relations
  + getConditions(Container $container) : Conditions
  + getFields(Container $container) : Fields
  + getUpdatesql(Container $container) : Updatesql
  + getTabs(Container $container) : Tabs
  + getCustomtabs(Container $container) : Customtabs
  + getCustomtabsJ3(Container $container) : CustomtabsJ3
  + getCustomtabsJ4(Container $container) : CustomtabsJ4
  + getCustomtabsJ5(Container $container) : CustomtabsJ5
  + getAdminviews(Container $container) : Adminviews
  + getSqltweaking(Container $container) : Sqltweaking
  + getSqldump(Container $container) : Sqldump
  + getWhmcs(Container $container) : Whmcs
  + getFilesfolders(Container $container) : Filesfolders
  + getModifieddate(Container $container) : Modifieddate
  + getCreatedate(Container $container) : Createdate
  + getRouter(Container $container) : Router
  + getUpdateserver(Container $container) : Updateserver
}

note right of Model::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note left of Model::getServerLoad
  Get The Load Class.

  since: 3.2.0
  return: ServerLoad
end note

note right of Model::getJoomlaplugins
  Get The Joomlaplugins Class.

  since: 3.2.0
  return: Joomlaplugins
end note

note left of Model::getJoomlamodules
  Get The Joomlamodules Class.

  since: 3.2.0
  return: Joomlamodules
end note

note right of Model::getHistorycomponent
  Get The Historycomponent Class.

  since: 3.2.0
  return: Historycomponent
end note

note left of Model::getCustomadminviews
  Get The Customadminviews Class.

  since: 3.2.0
  return: Customadminviews
end note

note right of Model::getAjaxcustomview
  Get The Ajaxcustomview Class.

  since: 3.2.0
  return: Ajaxcustomview
end note

note left of Model::getJavascriptcustomview
  Get The Javascriptcustomview Class.

  since: 3.2.0
  return: Javascriptcustomview
end note

note right of Model::getCsscustomview
  Get The Csscustomview Class.

  since: 3.2.0
  return: Csscustomview
end note

note left of Model::getPhpcustomview
  Get The Phpcustomview Class.

  since: 3.2.0
  return: Phpcustomview
end note

note right of Model::getDynamicget
  Get The Dynamicget Class.

  since: 3.2.0
  return: Dynamicget
end note

note left of Model::getLibraries
  Get The Libraries Class.

  since: 3.2.0
  return: Libraries
end note

note right of Model::getSiteviews
  Get The Siteviews Class.

  since: 3.2.0
  return: Siteviews
end note

note left of Model::getPermissions
  Get The Permissions Class.

  since: 3.2.0
  return: Permissions
end note

note right of Model::getHistoryadminview
  Get The Historyadminview Class.

  since: 3.2.0
  return: Historyadminview
end note

note left of Model::getMysqlsettings
  Get The Mysqlsettings Class.

  since: 3.2.0
  return: Mysqlsettings
end note

note right of Model::getSql
  Get The Sql Class.

  since: 3.2.0
  return: Sql
end note

note left of Model::getCustomalias
  Get The Customalias Class.

  since: 3.2.0
  return: Customalias
end note

note right of Model::getAjaxadmin
  Get The Ajaxadmin Class.

  since: 3.2.0
  return: Ajaxadmin
end note

note left of Model::getCustomimportscripts
  Get The Customimportscripts Class.

  since: 3.2.0
  return: Customimportscripts
end note

note right of Model::getCustombuttons
  Get The Custombuttons Class.

  since: 3.2.0
  return: Custombuttons
end note

note left of Model::getLoader
  Get The Loader Class.

  since: 3.2.0
  return: Loader
end note

note right of Model::getPhpadminview
  Get The Phpadminview Class.

  since: 3.2.0
  return: Phpadminview
end note

note left of Model::getCssadminview
  Get The Cssadminview Class.

  since: 3.2.0
  return: Cssadminview
end note

note right of Model::getJavascriptadminview
  Get The Javascriptadminview Class.

  since: 3.2.0
  return: Javascriptadminview
end note

note left of Model::getLinkedviews
  Get The Linkedviews Class.

  since: 3.2.0
  return: Linkedviews
end note

note right of Model::getRelations
  Get The Relations Class.

  since: 3.2.0
  return: Relations
end note

note left of Model::getConditions
  Get The Conditions Class.

  since: 3.2.0
  return: Conditions
end note

note right of Model::getFields
  Get The Fields Class.

  since: 3.2.0
  return: Fields
end note

note left of Model::getUpdatesql
  Get The Updatesql Class.

  since: 3.2.0
  return: Updatesql
end note

note right of Model::getTabs
  Get The Tabs Class.

  since: 3.2.0
  return: Tabs
end note

note left of Model::getCustomtabs
  Get The Customtabs Class.

  since: 3.2.0
  return: Customtabs
end note

note right of Model::getCustomtabsJ3
  Get The CustomtabsJ3 Class.

  since: 3.2.0
  return: CustomtabsJ3
end note

note left of Model::getCustomtabsJ4
  Get The CustomtabsJ4 Class.

  since: 3.2.0
  return: CustomtabsJ4
end note

note right of Model::getCustomtabsJ5
  Get The CustomtabsJ5 Class.

  since: 3.2.0
  return: CustomtabsJ5
end note

note left of Model::getAdminviews
  Get The Adminviews Class.

  since: 3.2.0
  return: Adminviews
end note

note right of Model::getSqltweaking
  Get The Sqltweaking Class.

  since: 3.2.0
  return: Sqltweaking
end note

note left of Model::getSqldump
  Get The Sqldump Class.

  since: 3.2.0
  return: Sqldump
end note

note right of Model::getWhmcs
  Get The Whmcs Class.

  since: 3.2.0
  return: Whmcs
end note

note left of Model::getFilesfolders
  Get The Filesfolders Class.

  since: 3.2.0
  return: Filesfolders
end note

note right of Model::getModifieddate
  Get The Modifieddate Class.

  since: 3.2.0
  return: Modifieddate
end note

note left of Model::getCreatedate
  Get The Createdate Class.

  since: 3.2.0
  return: Createdate
end note

note right of Model::getRouter
  Get The Router Class.

  since: 3.2.0
  return: Router
end note

note left of Model::getUpdateserver
  Get The Updateserver Class.

  since: 3.2.0
  return: Updateserver
end note

@enduml
```

The **Power** feature in JCB allows you to write PHP classes and their implementations,
making it easy to include them in your Joomla project. JCB handles linking, autoloading,
namespacing, and folder structure creation for you.

By using the **SPK** (Super Power Key) in your custom code (replacing the class name
in your code with the SPK), JCB will automatically pull the Power from the repository
into your project. This makes it available in your JCB instance, allowing you to edit
and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in
namespacing to prevent collisions and improve reusability across different JCB systems.

You can also set the **JCB powers path** globally or per component under the
**Dynamic Integration** tab, providing flexibility and maintainability.

To add this specific Power to your project in JCB:

> Simply use this SPK:
```
Super---0601fee8_d51e_4af0_9ad3_b5f8700c4a45---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")