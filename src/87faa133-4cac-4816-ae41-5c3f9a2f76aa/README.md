### JCB! Power
# class Customview (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Service**

```uml
@startuml

class Customview  #Gold {
  + register(Container $container) : void
  + getCustomviewData(Container $container) : CustomviewData
  + getDynamicgetData(Container $container) : DynamicgetData
  + getDynamicgetSelection(Container $container) : DynamicgetSelection
  + getMethods(Container $container) : Methods
  + getGetItems(Container $container) : GetItems
  + getGetItem(Container $container) : GetItem
  + getListQuery(Container $container) : ListQuery
  + getCustomGetMethods(Container $container) : CustomGetMethods
  + getQueries(Container $container) : Queries
  + getQueryFilter(Container $container) : QueryFilter
  + getQueryWhere(Container $container) : QueryWhere
  + getQueryOrder(Container $container) : QueryOrder
  + getQueryGroup(Container $container) : QueryGroup
  + getUikitLoader(Container $container) : UikitLoader
  + getGlobals(Container $container) : Globals
  + getCustomJoin(Container $container) : CustomJoin
  + getJoinStructure(Container $container) : JoinStructure
  + getDecodeColumn(Container $container) : DecodeColumn
  + getFilterColumn(Container $container) : FilterColumn
  + getFieldonContentPrepare(Container $container) : FieldonContentPrepare
}

note right of Customview::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note left of Customview::getCustomviewData
  Get the Compiler Customview Data

  since: 3.2.0
  return: CustomviewData
end note

note right of Customview::getDynamicgetData
  Get the Compiler Dynamicget Data

  since: 3.2.0
  return: DynamicgetData
end note

note left of Customview::getDynamicgetSelection
  Get the Compiler Dynamicget Selection

  since: 3.2.0
  return: DynamicgetSelection
end note

note right of Customview::getMethods
  Get The Methods Class.

  since: 5.1.2
  return: Methods
end note

note left of Customview::getGetItems
  Get The GetItems Class.

  since: 5.1.2
  return: GetItems
end note

note right of Customview::getGetItem
  Get The GetItem Class.

  since: 5.1.2
  return: GetItem
end note

note left of Customview::getListQuery
  Get The ListQuery Class.

  since: 5.1.2
  return: ListQuery
end note

note right of Customview::getCustomGetMethods
  Get The CustomGetMethods Class.

  since: 5.1.2
  return: CustomGetMethods
end note

note left of Customview::getQueries
  Get The Queries Class.

  since: 5.1.2
  return: Queries
end note

note right of Customview::getQueryFilter
  Get The QueryFilter Class.

  since: 5.1.2
  return: QueryFilter
end note

note left of Customview::getQueryWhere
  Get The QueryWhere Class.

  since: 5.1.2
  return: QueryWhere
end note

note right of Customview::getQueryOrder
  Get The QueryOrder Class.

  since: 5.1.2
  return: QueryOrder
end note

note left of Customview::getQueryGroup
  Get The QueryGroup Class.

  since: 5.1.2
  return: QueryGroup
end note

note right of Customview::getUikitLoader
  Get The UikitLoader Class.

  since: 5.1.2
  return: UikitLoader
end note

note left of Customview::getGlobals
  Get The Globals Class.

  since: 5.1.2
  return: Globals
end note

note right of Customview::getCustomJoin
  Get The CustomJoin Class.

  since: 5.1.2
  return: CustomJoin
end note

note left of Customview::getJoinStructure
  Get The JoinStructure Class.

  since: 5.1.2
  return: JoinStructure
end note

note right of Customview::getDecodeColumn
  Get The DecodeColumn Class.

  since: 5.1.2
  return: DecodeColumn
end note

note left of Customview::getFilterColumn
  Get The FilterColumn Class.

  since: 5.1.2
  return: FilterColumn
end note

note right of Customview::getFieldonContentPrepare
  Get The FieldonContentPrepare Class.

  since: 5.1.2
  return: FieldonContentPrepare
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
Super---87faa133_4cac_4816_ae41_5c3f9a2f76aa---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")