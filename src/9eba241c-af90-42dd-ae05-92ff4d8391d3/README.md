### JCB! Power
# class Joomlaplugin (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Service**

```uml
@startuml

class Joomlaplugin  #Gold {
  # $targetVersion
  + register(Container $container) : void
  + getPluginData(Container $container) : PluginData
  + getJ3PluginData(Container $container) : J3PluginData
  + getJ4PluginData(Container $container) : J4PluginData
  + getJ5PluginData(Container $container) : J5PluginData
  + getJ6PluginData(Container $container) : J6PluginData
  + getStructure(Container $container) : Structure
  + getJ3Structure(Container $container) : J3Structure
  + getJ4Structure(Container $container) : J4Structure
  + getJ5Structure(Container $container) : J5Structure
  + getJ6Structure(Container $container) : J6Structure
  + getInfusion(Container $container) : Infusion
  + getJ3Infusion(Container $container) : J3Infusion
  + getJ4Infusion(Container $container) : J4Infusion
  + getJ5Infusion(Container $container) : J5Infusion
  + getJ6Infusion(Container $container) : J6Infusion
}

note right of Joomlaplugin::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note left of Joomlaplugin::getPluginData
  Get The Plug-in Data Class.

  since: 5.0.2
  return: PluginData
end note

note right of Joomlaplugin::getJ3PluginData
  Get The PluginData Class.

  since: 5.0.2
  return: J3PluginData
end note

note left of Joomlaplugin::getJ4PluginData
  Get The PluginData Class.

  since: 5.0.2
  return: J4PluginData
end note

note right of Joomlaplugin::getJ5PluginData
  Get The PluginData Class.

  since: 5.0.2
  return: J5PluginData
end note

note left of Joomlaplugin::getJ6PluginData
  Get The PluginData Class.

  since: 5.1.2
  return: J6PluginData
end note

note right of Joomlaplugin::getStructure
  Get the Joomla Plugin Structure Builder

  since: 3.2.0
  return: Structure
end note

note left of Joomlaplugin::getJ3Structure
  Get the Joomla 3 Plugin Structure Builder

  since: 5.0.2
  return: J3Structure
end note

note right of Joomlaplugin::getJ4Structure
  Get the Joomla 4 Plugin Structure Builder

  since: 5.0.2
  return: J4Structure
end note

note left of Joomlaplugin::getJ5Structure
  Get the Joomla 5 Plugin Structure Builder

  since: 5.0.2
  return: J5Structure
end note

note right of Joomlaplugin::getJ6Structure
  Get the Joomla 6 Plugin Structure Builder

  since: 5.1.2
  return: J6Structure
end note

note left of Joomlaplugin::getInfusion
  Get The InfusionInterface Class.

  since: 5.0.2
  return: Infusion
end note

note right of Joomlaplugin::getJ3Infusion
  Get The Infusion Class.

  since: 5.0.2
  return: J3Infusion
end note

note left of Joomlaplugin::getJ4Infusion
  Get The Infusion Class.

  since: 5.0.2
  return: J4Infusion
end note

note right of Joomlaplugin::getJ5Infusion
  Get The Infusion Class.

  since: 5.0.2
  return: J5Infusion
end note

note left of Joomlaplugin::getJ6Infusion
  Get The Infusion Class.

  since: 5.1.2
  return: J6Infusion
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
Super---9eba241c_af90_42dd_ae05_92ff4d8391d3---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")