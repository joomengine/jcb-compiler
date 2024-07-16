```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class BuilderLZ (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Service**

```uml
@startuml
class BuilderLZ  #Gold {
  + register(Container $container) : void
  + getLanguages(Container $container) : Languages
  + getLanguageMessages(Container $container) : LanguageMessages
  + getLayout(Container $container) : Layout
  + getLayoutData(Container $container) : LayoutData
  + getLibraryManager(Container $container) : LibraryManager
  + getListFieldClass(Container $container) : ListFieldClass
  + getListHeadOverride(Container $container) : ListHeadOverride
  + getListJoin(Container $container) : ListJoin
  + getLists(Container $container) : Lists
  + getMainTextField(Container $container) : MainTextField
  + getMetaData(Container $container) : MetaData
  + getModelBasicField(Container $container) : ModelBasicField
  + getModelExpertField(Container $container) : ModelExpertField
  + getModelExpertFieldInitiator(Container $container) : ModelExpertFieldInitiator
  + getModelMediumField(Container $container) : ModelMediumField
  + getModelWhmcsField(Container $container) : ModelWhmcsField
  + getMovedPublishingFields(Container $container) : MovedPublishingFields
  + getMysqlTableSetting(Container $container) : MysqlTableSetting
  + getNewPublishingFields(Container $container) : NewPublishingFields
  + getOrderZero(Container $container) : OrderZero
  + getOtherFilter(Container $container) : OtherFilter
  + getOtherGroup(Container $container) : OtherGroup
  + getOtherJoin(Container $container) : OtherJoin
  + getOtherOrder(Container $container) : OtherOrder
  + getOtherQuery(Container $container) : OtherQuery
  + getOtherWhere(Container $container) : OtherWhere
  + getPermissionAction(Container $container) : PermissionAction
  + getPermissionComponent(Container $container) : PermissionComponent
  + getPermissionCore(Container $container) : PermissionCore
  + getPermissionDashboard(Container $container) : PermissionDashboard
  + getPermissionFields(Container $container) : PermissionFields
  + getPermissionGlobalAction(Container $container) : PermissionGlobalAction
  + getPermissionViews(Container $container) : PermissionViews
  + getRequest(Container $container) : Request
  + getRouter(Container $container) : Router
  + getScriptMediaSwitch(Container $container) : ScriptMediaSwitch
  + getScriptUserSwitch(Container $container) : ScriptUserSwitch
  + getSearch(Container $container) : Search
  + getSelectionTranslation(Container $container) : SelectionTranslation
  + getSiteDecrypt(Container $container) : SiteDecrypt
  + getSiteDynamicGet(Container $container) : SiteDynamicGet
  + getSiteEditView(Container $container) : SiteEditView
  + getSiteFieldData(Container $container) : SiteFieldData
  + getSiteFieldDecodeFilter(Container $container) : SiteFieldDecodeFilter
  + getSiteFields(Container $container) : SiteFields
  + getSiteMainGet(Container $container) : SiteMainGet
  + getSort(Container $container) : Sort
  + getTabCounter(Container $container) : TabCounter
  + getTags(Container $container) : Tags
  + getTemplateData(Container $container) : TemplateData
  + getTitle(Container $container) : Title
  + getUikitComp(Container $container) : UikitComp
  + getUpdateMysql(Container $container) : UpdateMysql
  + getViewsDefaultOrdering(Container $container) : ViewsDefaultOrdering
}

note right of BuilderLZ::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note left of BuilderLZ::getLanguages
  Get The Languages Class.

  since: 3.2.0
  return: Languages
end note

note right of BuilderLZ::getLanguageMessages
  Get The LanguageMessages Class.

  since: 3.2.0
  return: LanguageMessages
end note

note left of BuilderLZ::getLayout
  Get The Layout Class.

  since: 3.2.0
  return: Layout
end note

note right of BuilderLZ::getLayoutData
  Get The LayoutData Class.

  since: 3.2.0
  return: LayoutData
end note

note left of BuilderLZ::getLibraryManager
  Get The LibraryManager Class.

  since: 3.2.0
  return: LibraryManager
end note

note right of BuilderLZ::getListFieldClass
  Get The ListFieldClass Class.

  since: 3.2.0
  return: ListFieldClass
end note

note left of BuilderLZ::getListHeadOverride
  Get The ListHeadOverride Class.

  since: 3.2.0
  return: ListHeadOverride
end note

note right of BuilderLZ::getListJoin
  Get The ListJoin Class.

  since: 3.2.0
  return: ListJoin
end note

note left of BuilderLZ::getLists
  Get The Lists Class.

  since: 3.2.0
  return: Lists
end note

note right of BuilderLZ::getMainTextField
  Get The MainTextField Class.

  since: 3.2.0
  return: MainTextField
end note

note left of BuilderLZ::getMetaData
  Get The MetaData Class.

  since: 3.2.0
  return: MetaData
end note

note right of BuilderLZ::getModelBasicField
  Get The ModelBasicField Class.

  since: 3.2.0
  return: ModelBasicField
end note

note left of BuilderLZ::getModelExpertField
  Get The ModelExpertField Class.

  since: 3.2.0
  return: ModelExpertField
end note

note right of BuilderLZ::getModelExpertFieldInitiator
  Get The ModelExpertFieldInitiator Class.

  since: 3.2.0
  return: ModelExpertFieldInitiator
end note

note left of BuilderLZ::getModelMediumField
  Get The ModelMediumField Class.

  since: 3.2.0
  return: ModelMediumField
end note

note right of BuilderLZ::getModelWhmcsField
  Get The ModelWhmcsField Class.

  since: 3.2.0
  return: ModelWhmcsField
end note

note left of BuilderLZ::getMovedPublishingFields
  Get The MovedPublishingFields Class.

  since: 3.2.0
  return: MovedPublishingFields
end note

note right of BuilderLZ::getMysqlTableSetting
  Get The MysqlTableSetting Class.

  since: 3.2.0
  return: MysqlTableSetting
end note

note left of BuilderLZ::getNewPublishingFields
  Get The NewPublishingFields Class.

  since: 3.2.0
  return: NewPublishingFields
end note

note right of BuilderLZ::getOrderZero
  Get The OrderZero Class.

  since: 3.2.0
  return: OrderZero
end note

note left of BuilderLZ::getOtherFilter
  Get The OtherFilter Class.

  since: 3.2.0
  return: OtherFilter
end note

note right of BuilderLZ::getOtherGroup
  Get The OtherGroup Class.

  since: 3.2.0
  return: OtherGroup
end note

note left of BuilderLZ::getOtherJoin
  Get The OtherJoin Class.

  since: 3.2.0
  return: OtherJoin
end note

note right of BuilderLZ::getOtherOrder
  Get The OtherOrder Class.

  since: 3.2.0
  return: OtherOrder
end note

note left of BuilderLZ::getOtherQuery
  Get The OtherQuery Class.

  since: 3.2.0
  return: OtherQuery
end note

note right of BuilderLZ::getOtherWhere
  Get The OtherWhere Class.

  since: 3.2.0
  return: OtherWhere
end note

note left of BuilderLZ::getPermissionAction
  Get The PermissionAction Class.

  since: 3.2.0
  return: PermissionAction
end note

note right of BuilderLZ::getPermissionComponent
  Get The PermissionComponent Class.

  since: 3.2.0
  return: PermissionComponent
end note

note left of BuilderLZ::getPermissionCore
  Get The PermissionCore Class.

  since: 3.2.0
  return: PermissionCore
end note

note right of BuilderLZ::getPermissionDashboard
  Get The PermissionDashboard Class.

  since: 3.2.0
  return: PermissionDashboard
end note

note left of BuilderLZ::getPermissionFields
  Get The PermissionFields Class.

  since: 3.2.0
  return: PermissionFields
end note

note right of BuilderLZ::getPermissionGlobalAction
  Get The PermissionGlobalAction Class.

  since: 3.2.0
  return: PermissionGlobalAction
end note

note left of BuilderLZ::getPermissionViews
  Get The PermissionViews Class.

  since: 3.2.0
  return: PermissionViews
end note

note right of BuilderLZ::getRequest
  Get The Request Class.

  since: 3.2.0
  return: Request
end note

note left of BuilderLZ::getRouter
  Get The Router Class.

  since: 3.2.0
  return: Router
end note

note right of BuilderLZ::getScriptMediaSwitch
  Get The ScriptMediaSwitch Class.

  since: 3.2.0
  return: ScriptMediaSwitch
end note

note left of BuilderLZ::getScriptUserSwitch
  Get The ScriptUserSwitch Class.

  since: 3.2.0
  return: ScriptUserSwitch
end note

note right of BuilderLZ::getSearch
  Get The Search Class.

  since: 3.2.0
  return: Search
end note

note left of BuilderLZ::getSelectionTranslation
  Get The SelectionTranslation Class.

  since: 3.2.0
  return: SelectionTranslation
end note

note right of BuilderLZ::getSiteDecrypt
  Get The SiteDecrypt Class.

  since: 3.2.0
  return: SiteDecrypt
end note

note left of BuilderLZ::getSiteDynamicGet
  Get The SiteDynamicGet Class.

  since: 3.2.0
  return: SiteDynamicGet
end note

note right of BuilderLZ::getSiteEditView
  Get The SiteEditView Class.

  since: 3.2.0
  return: SiteEditView
end note

note left of BuilderLZ::getSiteFieldData
  Get The SiteFieldData Class.

  since: 3.2.0
  return: SiteFieldData
end note

note right of BuilderLZ::getSiteFieldDecodeFilter
  Get The SiteFieldDecodeFilter Class.

  since: 3.2.0
  return: SiteFieldDecodeFilter
end note

note left of BuilderLZ::getSiteFields
  Get The SiteFields Class.

  since: 3.2.0
  return: SiteFields
end note

note right of BuilderLZ::getSiteMainGet
  Get The SiteMainGet Class.

  since: 3.2.0
  return: SiteMainGet
end note

note left of BuilderLZ::getSort
  Get The Sort Class.

  since: 3.2.0
  return: Sort
end note

note right of BuilderLZ::getTabCounter
  Get The TabCounter Class.

  since: 3.2.0
  return: TabCounter
end note

note left of BuilderLZ::getTags
  Get The Tags Class.

  since: 3.2.0
  return: Tags
end note

note right of BuilderLZ::getTemplateData
  Get The TemplateData Class.

  since: 3.2.0
  return: TemplateData
end note

note left of BuilderLZ::getTitle
  Get The Title Class.

  since: 3.2.0
  return: Title
end note

note right of BuilderLZ::getUikitComp
  Get The UikitComp Class.

  since: 3.2.0
  return: UikitComp
end note

note left of BuilderLZ::getUpdateMysql
  Get The UpdateMysql Class.

  since: 3.2.0
  return: UpdateMysql
end note

note right of BuilderLZ::getViewsDefaultOrdering
  Get The ViewsDefaultOrdering Class.

  since: 3.2.0
  return: ViewsDefaultOrdering
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---2c76c06e_a371_4b73_9fbe_b4d9b4df55d7---Power
```
> remember to replace the `---` with `___` to activate this Power in your code

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

