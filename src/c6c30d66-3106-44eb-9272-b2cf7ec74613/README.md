### JCB! Power
# class Field (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Service**

```uml
@startuml

class Field  #Gold {
  # $targetVersion
  # $currentVersion
  + register(Container $container) : void
  + getCompilerField(Container $container) : CompilerField
  + getData(Container $container) : Data
  + getGroups(Container $container) : Groups
  + getAttributes(Container $container) : Attributes
  + getName(Container $container) : Name
  + getModalSelect(Container $container) : ModalSelect
  + getTypeName(Container $container) : TypeName
  + getUniqueName(Container $container) : UniqueName
  + getRule(Container $container) : Rule
  + getCustomcode(Container $container) : Customcode
  + getDatabaseName(Container $container) : DatabaseName
  + getJ3CoreField(Container $container) : J3CoreField
  + getJ4CoreField(Container $container) : J4CoreField
  + getJ5CoreField(Container $container) : J5CoreField
  + getJ6CoreField(Container $container) : J6CoreField
  + getJ3InputButton(Container $container) : J3InputButton
  + getJ4InputButton(Container $container) : J4InputButton
  + getJ5InputButton(Container $container) : J5InputButton
  + getJ6InputButton(Container $container) : J6InputButton
  + getCoreField(Container $container) : CoreField
  + getInputButton(Container $container) : InputButton
}

note right of Field::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note left of Field::getCompilerField
  Get The Field Class.

  since: 3.2.0
  return: CompilerField
end note

note right of Field::getData
  Get The Data Class.

  since: 3.2.0
  return: Data
end note

note left of Field::getGroups
  Get The Groups Class.

  since: 3.2.0
  return: Groups
end note

note right of Field::getAttributes
  Get The Attributes Class.

  since: 3.2.0
  return: Attributes
end note

note left of Field::getName
  Get The Name Class.

  since: 3.2.0
  return: Name
end note

note right of Field::getModalSelect
  Get The ModalSelect Class.

  since: 5.2.1
  return: ModalSelect
end note

note left of Field::getTypeName
  Get The TypeName Class.

  since: 3.2.0
  return: TypeName
end note

note right of Field::getUniqueName
  Get The UniqueName Class.

  since: 3.2.0
  return: UniqueName
end note

note left of Field::getRule
  Get The Rule Class.

  since: 3.2.0
  return: Rule
end note

note right of Field::getCustomcode
  Get The Customcode Class.

  since: 3.2.0
  return: Customcode
end note

note left of Field::getDatabaseName
  Get The DatabaseName Class.

  since: 3.2.0
  return: DatabaseName
end note

note right of Field::getJ3CoreField
  Get The CoreField Class.

  since: 3.2.0
  return: J3CoreField
end note

note left of Field::getJ4CoreField
  Get The CoreField Class.

  since: 3.2.0
  return: J4CoreField
end note

note right of Field::getJ5CoreField
  Get The CoreField Class.

  since: 3.2.0
  return: J5CoreField
end note

note left of Field::getJ6CoreField
  Get The CoreField Class.

  since: 5.1.2
  return: J6CoreField
end note

note right of Field::getJ3InputButton
  Get The J3InputButton Class.

  since: 3.2.0
  return: J3InputButton
end note

note left of Field::getJ4InputButton
  Get The J4InputButton Class.

  since: 3.2.0
  return: J4InputButton
end note

note right of Field::getJ5InputButton
  Get The J5InputButton Class.

  since: 3.2.0
  return: J5InputButton
end note

note left of Field::getJ6InputButton
  Get The J6InputButton Class.

  since: 5.1.2
  return: J6InputButton
end note

note right of Field::getCoreField
  Get The CoreFieldInterface Class.

  since: 3.2.0
  return: CoreField
end note

note left of Field::getInputButton
  Get The InputButton Class.

  since: 3.2.0
  return: InputButton
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
Super---c6c30d66_3106_44eb_9272_b2cf7ec74613---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")