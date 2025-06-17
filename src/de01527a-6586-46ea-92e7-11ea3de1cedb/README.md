### JCB! Power
# class Power (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Service**

```uml
@startuml

class Power  #Gold {
  + register(Container $container) : void
  + getPowers(Container $container) : Powers
  + getPowerTable(Container $container) : Table
  + getPowerTracker(Container $container) : Tracker
  + getMessageBus(Container $container) : MessageBus
  + getRemoteConfig(Container $container) : Config
  + getRemoteGet(Container $container) : Get
  + getGrep(Container $container) : Grep
  + getAutoloader(Container $container) : Autoloader
  + getInfusion(Container $container) : Infusion
  + getStructure(Container $container) : Structure
  + getParser(Container $container) : Parser
  + getPlantuml(Container $container) : Plantuml
  + getItemReadme(Container $container) : ItemReadme
  + getMainReadme(Container $container) : MainReadme
  + getExtractor(Container $container) : Extractor
  + getInjector(Container $container) : Injector
}

note right of Power::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note left of Power::getPowers
  Get The Power Class.

  since: 3.2.0
  return: Powers
end note

note right of Power::getPowerTable
  Get The Power Table Class.

  since: 5.1.1
  return: Table
end note

note left of Power::getPowerTracker
  Get The Tracker Class.

  since: 5.1.1
  return: Tracker
end note

note right of Power::getMessageBus
  Get The Message Bus Class.

  since: 5.1.1
  return: MessageBus
end note

note left of Power::getRemoteConfig
  Get The Remote Config Class.

  since: 5.1.1
  return: Config
end note

note right of Power::getRemoteGet
  Get The Remote Get Class.

  since: 3.2.0
  return: Get
end note

note left of Power::getGrep
  Get The Grep Class.

  since: 3.2.0
  return: Grep
end note

note right of Power::getAutoloader
  Get The Autoloader Class.

  since: 3.2.0
  return: Autoloader
end note

note left of Power::getInfusion
  Get The Infusion Class.

  since: 3.2.0
  return: Infusion
end note

note right of Power::getStructure
  Get The Structure Class.

  since: 3.2.0
  return: Structure
end note

note left of Power::getParser
  Get The Parser Class.

  since: 3.2.0
  return: Parser
end note

note right of Power::getPlantuml
  Get The Plantuml Class.

  since: 3.2.0
  return: Plantuml
end note

note left of Power::getItemReadme
  Get The Readme Class.

  since: 3.2.0
  return: ItemReadme
end note

note right of Power::getMainReadme
  Get The Readme Class.

  since: 3.2.0
  return: MainReadme
end note

note left of Power::getExtractor
  Get The Extractor Class.

  since: 3.2.0
  return: Extractor
end note

note right of Power::getInjector
  Get The Injector Class.

  since: 3.2.0
  return: Injector
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
Super---de01527a_6586_46ea_92e7_11ea3de1cedb---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")