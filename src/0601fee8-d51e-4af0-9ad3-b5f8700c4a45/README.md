```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Model (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Service**
```uml
@startuml
class Model  #Gold {
  + register(Container $container) : void
  + getModelJoomlaplugins(Container $container) : Joomlaplugins
  + getModelJoomlamodules(Container $container) : Joomlamodules
  + getModelHistorycomponent(Container $container) : Historycomponent
  + getModelCustomadminviews(Container $container) : Customadminviews
  + getModelAjaxcustomview(Container $container) : Ajaxcustomview
  + getModelJavascriptcustomview(Container $container) : Javascriptcustomview
  + getModelCsscustomview(Container $container) : Csscustomview
  + getModelPhpcustomview(Container $container) : Phpcustomview
  + getModelDynamicget(Container $container) : Dynamicget
  + getModelLibraries(Container $container) : Libraries
  + getModelSiteviews(Container $container) : Siteviews
  + getModelPermissions(Container $container) : Permissions
  + getModelHistoryadminview(Container $container) : Historyadminview
  + getModelMysqlsettings(Container $container) : Mysqlsettings
  + getModelSql(Container $container) : Sql
  + getModelCustomalias(Container $container) : Customalias
  + getModelAjaxadmin(Container $container) : Ajaxadmin
  + getModelCustomimportscripts(Container $container) : Customimportscripts
  + getModelCustombuttons(Container $container) : Custombuttons
  + getModelLoader(Container $container) : Loader
  + getModelPhpadminview(Container $container) : Phpadminview
  + getModelCssadminview(Container $container) : Cssadminview
  + getModelJavascriptadminview(Container $container) : Javascriptadminview
  + getModelLinkedviews(Container $container) : Linkedviews
  + getModelRelations(Container $container) : Relations
  + getModelConditions(Container $container) : Conditions
  + getModelFields(Container $container) : Fields
  + getModelUpdatesql(Container $container) : Updatesql
  + getModelTabs(Container $container) : Tabs
  + getModelCustomtabs(Container $container) : Customtabs
  + getModelAdminviews(Container $container) : Adminviews
  + getModelSqltweaking(Container $container) : Sqltweaking
  + getModelSqldump(Container $container) : Sqldump
  + getModelWhmcs(Container $container) : Whmcs
  + getModifieddate(Container $container) : Modifieddate
  + getCreatedate(Container $container) : Createdate
  + getUpdateserver(Container $container) : Updateserver
  + getModelFilesfolders(Container $container) : Filesfolders
  + getServerLoad(Container $container) : ServerLoad
}

note right of Model::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note left of Model::getModelJoomlaplugins
  Get the Joomla plugins Model

  since: 3.2.0
  return: Joomlaplugins
end note

note right of Model::getModelJoomlamodules
  Get the Joomla modules Model

  since: 3.2.0
  return: Joomlamodules
end note

note left of Model::getModelHistorycomponent
  Get the history component Model

  since: 3.2.0
  return: Historycomponent
end note

note right of Model::getModelCustomadminviews
  Get the custom admin views Model

  since: 3.2.0
  return: Customadminviews
end note

note left of Model::getModelAjaxcustomview
  Get the ajax custom view Model

  since: 3.2.0
  return: Ajaxcustomview
end note

note right of Model::getModelJavascriptcustomview
  Get the javascript custom view Model

  since: 3.2.0
  return: Javascriptcustomview
end note

note left of Model::getModelCsscustomview
  Get the css custom view Model

  since: 3.2.0
  return: Csscustomview
end note

note right of Model::getModelPhpcustomview
  Get the php custom view Model

  since: 3.2.0
  return: Phpcustomview
end note

note left of Model::getModelDynamicget
  Get the dynamic get Model

  since: 3.2.0
  return: Dynamicget
end note

note right of Model::getModelLibraries
  Get the libraries Model

  since: 3.2.0
  return: Libraries
end note

note left of Model::getModelSiteviews
  Get the site views Model

  since: 3.2.0
  return: Siteviews
end note

note right of Model::getModelPermissions
  Get the permissions Model

  since: 3.2.0
  return: Permissions
end note

note left of Model::getModelHistoryadminview
  Get the admin view history Model

  since: 3.2.0
  return: Historyadminview
end note

note right of Model::getModelMysqlsettings
  Get the MySQL settings Model

  since: 3.2.0
  return: Mysqlsettings
end note

note left of Model::getModelSql
  Get the Sql Model

  since: 3.2.0
  return: Sql
end note

note right of Model::getModelCustomalias
  Get the custom alias Model

  since: 3.2.0
  return: Customalias
end note

note left of Model::getModelAjaxadmin
  Get the Admin Ajax Model

  since: 3.2.0
  return: Ajaxadmin
end note

note right of Model::getModelCustomimportscripts
  Get the custom import scripts Model

  since: 3.2.0
  return: Customimportscripts
end note

note left of Model::getModelCustombuttons
  Get the custom import scripts Model

  since: 3.2.0
  return: Custombuttons
end note

note right of Model::getModelLoader
  Get the Model Auto Loader

  since: 3.2.0
  return: Loader
end note

note left of Model::getModelPhpadminview
  Get the php admin view Model

  since: 3.2.0
  return: Phpadminview
end note

note right of Model::getModelCssadminview
  Get the Css Adminview Model

  since: 3.2.0
  return: Cssadminview
end note

note left of Model::getModelJavascriptadminview
  Get the Javascript Adminview Model

  since: 3.2.0
  return: Javascriptadminview
end note

note right of Model::getModelLinkedviews
  Get the linked views Model

  since: 3.2.0
  return: Linkedviews
end note

note left of Model::getModelRelations
  Get the relations Model

  since: 3.2.0
  return: Relations
end note

note right of Model::getModelConditions
  Get the conditions Model

  since: 3.2.0
  return: Conditions
end note

note left of Model::getModelFields
  Get the fields Model

  since: 3.2.0
  return: Fields
end note

note right of Model::getModelUpdatesql
  Get the update sql Model

  since: 3.2.0
  return: Updatesql
end note

note left of Model::getModelTabs
  Get the tabs Model

  since: 3.2.0
  return: Tabs
end note

note right of Model::getModelCustomtabs
  Get the custom tabs Model

  since: 3.2.0
  return: Customtabs
end note

note left of Model::getModelAdminviews
  Get the admin views Model

  since: 3.2.0
  return: Adminviews
end note

note right of Model::getModelSqltweaking
  Get the SQL tweaking Model

  since: 3.2.0
  return: Sqltweaking
end note

note left of Model::getModelSqldump
  Get the SQL dump Model

  since: 3.2.0
  return: Sqldump
end note

note right of Model::getModelWhmcs
  Get the whmcs Model

  since: 3.2.0
  return: Whmcs
end note

note left of Model::getModifieddate
  Get the modified date Model

  since: 3.2.0
  return: Modifieddate
end note

note right of Model::getCreatedate
  Get the create date Model

  since: 3.2.0
  return: Createdate
end note

note left of Model::getUpdateserver
  Get the update server Model

  since: 3.2.0
  return: Updateserver
end note

note right of Model::getModelFilesfolders
  Get the files folders Model

  since: 3.2.0
  return: Filesfolders
end note

note left of Model::getServerLoad
  Get the Server Model Server Loader class

  since: 3.2.0
  return: ServerLoad
end note
 
@enduml
```

---
```
     ██╗ ██████╗██████╗
     ██║██╔════╝██╔══██╗
     ██║██║     ██████╔╝
██   ██║██║     ██╔══██╗
╚█████╔╝╚██████╗██████╔╝
 ╚════╝  ╚═════╝╚═════╝
```
> Build with [Joomla Component Builder](https://git.vdm.dev/joomla/Component-Builder)

