### JCB! Power
# class ArchitectureModel (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Service**

```uml
@startuml

class ArchitectureModel  #Gold {
  # $targetVersion
  + register(Container $container) : void
  + getModelCanDelete(Container $container) : CanDeleteInterface
  + getJ5ModelCanDelete(Container $container) : J5ModelCanDelete
  + getJ4ModelCanDelete(Container $container) : J4ModelCanDelete
  + getJ3ModelCanDelete(Container $container) : J3ModelCanDelete
  + getModelCanEditState(Container $container) : CanEditStateInterface
  + getJ5ModelCanEditState(Container $container) : J5ModelCanEditState
  + getJ4ModelCanEditState(Container $container) : J4ModelCanEditState
  + getJ3ModelCanEditState(Container $container) : J3ModelCanEditState
}

note right of ArchitectureModel::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note left of ArchitectureModel::getModelCanDelete
  Get The Model CanDelete Class.

  since: 3.2.0
  return: CanDeleteInterface
end note

note right of ArchitectureModel::getJ5ModelCanDelete
  Get The Model CanDelete Class.

  since: 3.2.0
  return: J5ModelCanDelete
end note

note left of ArchitectureModel::getJ4ModelCanDelete
  Get The Model CanDelete Class.

  since: 3.2.0
  return: J4ModelCanDelete
end note

note right of ArchitectureModel::getJ3ModelCanDelete
  Get The Model CanDelete Class.

  since: 3.2.0
  return: J3ModelCanDelete
end note

note left of ArchitectureModel::getModelCanEditState
  Get The Model Can Edit State Class.

  since: 3.2.0
  return: CanEditStateInterface
end note

note right of ArchitectureModel::getJ5ModelCanEditState
  Get The Model Can Edit State Class.

  since: 3.2.0
  return: J5ModelCanEditState
end note

note left of ArchitectureModel::getJ4ModelCanEditState
  Get The Model Can Edit State Class.

  since: 3.2.0
  return: J4ModelCanEditState
end note

note right of ArchitectureModel::getJ3ModelCanEditState
  Get The Model Can Edit State Class.

  since: 3.2.0
  return: J3ModelCanEditState
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
Super---bbd36fbf_d905_47e8_8e67_9ea6ec734712---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")