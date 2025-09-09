### JCB! Power
# class ArchitecturePlugin (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Service**

```uml
@startuml

class ArchitecturePlugin  #Gold {
  # int $targetVersion
  + register(Container $container) : void
  + getExtension(Container $container) : Extension
  + getJ6Extension(Container $container) : J6Extension
  + getJ5Extension(Container $container) : J5Extension
  + getJ4Extension(Container $container) : J4Extension
  + getJ3Extension(Container $container) : J3Extension
  + getProvider(Container $container) : Provider
  + getJ6Provider(Container $container) : J6Provider
  + getJ5Provider(Container $container) : J5Provider
  + getJ4Provider(Container $container) : J4Provider
  + getJ3Provider(Container $container) : J3Provider
  + getMainXML(Container $container) : MainXML
  + getJ6MainXML(Container $container) : J6MainXML
  + getJ5MainXML(Container $container) : J5MainXML
  + getJ4MainXML(Container $container) : J4MainXML
  + getJ3MainXML(Container $container) : J3MainXML
}

note right of ArchitecturePlugin::register
  Registers the service provider with a DI container.

  since: 5.0.2
  return: void
end note

note left of ArchitecturePlugin::getExtension
  Get The Extension Class.

  since: 5.0.2
  return: Extension
end note

note right of ArchitecturePlugin::getJ6Extension
  Get The Extension Class.

  since: 5.1.2
  return: J6Extension
end note

note left of ArchitecturePlugin::getJ5Extension
  Get The Extension Class.

  since: 5.0.2
  return: J5Extension
end note

note right of ArchitecturePlugin::getJ4Extension
  Get The Extension Class.

  since: 5.0.2
  return: J4Extension
end note

note left of ArchitecturePlugin::getJ3Extension
  Get The Extension Class.

  since: 5.0.2
  return: J3Extension
end note

note right of ArchitecturePlugin::getProvider
  Get The ProviderInterface Class.

  since: 5.0.2
  return: Provider
end note

note left of ArchitecturePlugin::getJ6Provider
  Get The Provider Class.

  since: 5.1.2
  return: J6Provider
end note

note right of ArchitecturePlugin::getJ5Provider
  Get The Provider Class.

  since: 5.0.2
  return: J5Provider
end note

note left of ArchitecturePlugin::getJ4Provider
  Get The Provider Class.

  since: 5.0.2
  return: J4Provider
end note

note right of ArchitecturePlugin::getJ3Provider
  Get The Provider Class.

  since: 5.0.2
  return: J3Provider
end note

note left of ArchitecturePlugin::getMainXML
  Get The MainXML Class.

  since: 5.0.2
  return: MainXML
end note

note right of ArchitecturePlugin::getJ6MainXML
  Get The MainXML Class.

  since: 5.1.2
  return: J6MainXML
end note

note left of ArchitecturePlugin::getJ5MainXML
  Get The MainXML Class.

  since: 5.0.2
  return: J5MainXML
end note

note right of ArchitecturePlugin::getJ4MainXML
  Get The MainXML Class.

  since: 5.0.2
  return: J4MainXML
end note

note left of ArchitecturePlugin::getJ3MainXML
  Get The MainXML Class.

  since: 5.0.2
  return: J3MainXML
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
Super---98ac432d_df19_4c40_bb12_8104ea4362c8---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")