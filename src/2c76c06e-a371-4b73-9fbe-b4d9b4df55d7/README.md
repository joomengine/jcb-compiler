### JCB! Power
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
  + getMultilingual(Container $container) : Multilingual
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

note right of BuilderLZ::getMultilingual
  Get The Multilingual Class.

  since: 3.2.0
  return: Multilingual
end note

note left of BuilderLZ::getMysqlTableSetting
  Get The MysqlTableSetting Class.

  since: 3.2.0
  return: MysqlTableSetting
end note

note right of BuilderLZ::getNewPublishingFields
  Get The NewPublishingFields Class.

  since: 3.2.0
  return: NewPublishingFields
end note

note left of BuilderLZ::getOrderZero
  Get The OrderZero Class.

  since: 3.2.0
  return: OrderZero
end note

note right of BuilderLZ::getOtherFilter
  Get The OtherFilter Class.

  since: 3.2.0
  return: OtherFilter
end note

note left of BuilderLZ::getOtherGroup
  Get The OtherGroup Class.

  since: 3.2.0
  return: OtherGroup
end note

note right of BuilderLZ::getOtherJoin
  Get The OtherJoin Class.

  since: 3.2.0
  return: OtherJoin
end note

note left of BuilderLZ::getOtherOrder
  Get The OtherOrder Class.

  since: 3.2.0
  return: OtherOrder
end note

note right of BuilderLZ::getOtherQuery
  Get The OtherQuery Class.

  since: 3.2.0
  return: OtherQuery
end note

note left of BuilderLZ::getOtherWhere
  Get The OtherWhere Class.

  since: 3.2.0
  return: OtherWhere
end note

note right of BuilderLZ::getPermissionAction
  Get The PermissionAction Class.

  since: 3.2.0
  return: PermissionAction
end note

note left of BuilderLZ::getPermissionComponent
  Get The PermissionComponent Class.

  since: 3.2.0
  return: PermissionComponent
end note

note right of BuilderLZ::getPermissionCore
  Get The PermissionCore Class.

  since: 3.2.0
  return: PermissionCore
end note

note left of BuilderLZ::getPermissionDashboard
  Get The PermissionDashboard Class.

  since: 3.2.0
  return: PermissionDashboard
end note

note right of BuilderLZ::getPermissionFields
  Get The PermissionFields Class.

  since: 3.2.0
  return: PermissionFields
end note

note left of BuilderLZ::getPermissionGlobalAction
  Get The PermissionGlobalAction Class.

  since: 3.2.0
  return: PermissionGlobalAction
end note

note right of BuilderLZ::getPermissionViews
  Get The PermissionViews Class.

  since: 3.2.0
  return: PermissionViews
end note

note left of BuilderLZ::getRequest
  Get The Request Class.

  since: 3.2.0
  return: Request
end note

note right of BuilderLZ::getRouter
  Get The Router Class.

  since: 3.2.0
  return: Router
end note

note left of BuilderLZ::getScriptMediaSwitch
  Get The ScriptMediaSwitch Class.

  since: 3.2.0
  return: ScriptMediaSwitch
end note

note right of BuilderLZ::getScriptUserSwitch
  Get The ScriptUserSwitch Class.

  since: 3.2.0
  return: ScriptUserSwitch
end note

note left of BuilderLZ::getSearch
  Get The Search Class.

  since: 3.2.0
  return: Search
end note

note right of BuilderLZ::getSelectionTranslation
  Get The SelectionTranslation Class.

  since: 3.2.0
  return: SelectionTranslation
end note

note left of BuilderLZ::getSiteDecrypt
  Get The SiteDecrypt Class.

  since: 3.2.0
  return: SiteDecrypt
end note

note right of BuilderLZ::getSiteDynamicGet
  Get The SiteDynamicGet Class.

  since: 3.2.0
  return: SiteDynamicGet
end note

note left of BuilderLZ::getSiteEditView
  Get The SiteEditView Class.

  since: 3.2.0
  return: SiteEditView
end note

note right of BuilderLZ::getSiteFieldData
  Get The SiteFieldData Class.

  since: 3.2.0
  return: SiteFieldData
end note

note left of BuilderLZ::getSiteFieldDecodeFilter
  Get The SiteFieldDecodeFilter Class.

  since: 3.2.0
  return: SiteFieldDecodeFilter
end note

note right of BuilderLZ::getSiteFields
  Get The SiteFields Class.

  since: 3.2.0
  return: SiteFields
end note

note left of BuilderLZ::getSiteMainGet
  Get The SiteMainGet Class.

  since: 3.2.0
  return: SiteMainGet
end note

note right of BuilderLZ::getSort
  Get The Sort Class.

  since: 3.2.0
  return: Sort
end note

note left of BuilderLZ::getTabCounter
  Get The TabCounter Class.

  since: 3.2.0
  return: TabCounter
end note

note right of BuilderLZ::getTags
  Get The Tags Class.

  since: 3.2.0
  return: Tags
end note

note left of BuilderLZ::getTemplateData
  Get The TemplateData Class.

  since: 3.2.0
  return: TemplateData
end note

note right of BuilderLZ::getTitle
  Get The Title Class.

  since: 3.2.0
  return: Title
end note

note left of BuilderLZ::getUikitComp
  Get The UikitComp Class.

  since: 3.2.0
  return: UikitComp
end note

note right of BuilderLZ::getUpdateMysql
  Get The UpdateMysql Class.

  since: 3.2.0
  return: UpdateMysql
end note

note left of BuilderLZ::getViewsDefaultOrdering
  Get The ViewsDefaultOrdering Class.

  since: 3.2.0
  return: ViewsDefaultOrdering
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
Super---2c76c06e_a371_4b73_9fbe_b4d9b4df55d7---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")