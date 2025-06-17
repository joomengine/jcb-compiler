### JCB! Power
# final class Parser (Details)
> namespace: **VDM\Joomla\Componentbuilder\Power**

```uml
@startuml

class Parser << (F,LightGreen) >> #RoyalBlue {
  + code(string $code) : array
  + getClassCode(string $code) : ?string
  + getClassLicense(string $code) : ?string
  + getUseStatements(string $code) : ?array
  + getTraits(string $code) : ?array
  - properties(string $code) : ?array
  - methods(string $code) : ?array
  - extractDocBlock(string $code, string $declaration) : ?string
  - extractMethodBody(string $code, int $startPos) : ?string
  - extractFunctionArgumentDetails(?string $comment, ?string $arguments) : ?array
  - extractReturnType(?string $returnType, ?string $comment) : ?string
  - extractArgTypesFromComment(string $comment) : ?array
  - extractArgTypesArguments(?string $arguments) : ?array
  - extractReturnTypeFromComment(string $comment) : ?string
  - extractSinceVersion(?string $comment) : ?string
  - extractDeprecatedVersion(?string $comment) : ?string
  - removeWhiteSpaceFromComment(string $comment) : string
  - mergeArgumentTypes(array $argTypesFromDeclaration, ?array $argTypesFromComments) : array
}

note right of Parser::code
  Get properties and method declarations and other details from the given code.

  since: 3.2.0
  return: array
end note

note left of Parser::getClassCode
  Get the class body

  since: 3.2.0
  return: ?string
end note

note right of Parser::getClassLicense
  Get the class license

  since: 3.2.0
  return: ?string
end note

note left of Parser::getUseStatements
  Extracts the first consecutive `use` statements from the given PHP class.

  since: 3.2.0
  return: ?array
end note

note right of Parser::getTraits
  Extracts trait use statements from the given code.

  since: 3.2.0
  return: ?array
end note

note left of Parser::properties
  Extracts properties declarations and other details from the given code.

  since: 3.2.0
  return: ?array
end note

note right of Parser::methods
  Extracts method declarations and other details from the given code.

  since: 3.2.0
  return: ?array
end note

note left of Parser::extractDocBlock
  Extracts the PHPDoc block for a given function declaration.

  since: 3.2.0
  return: ?string
end note

note right of Parser::extractMethodBody
  Extracts method body based on starting position of method declaration.

  since: 3.2.0
  return: ?string
end note

note left of Parser::extractFunctionArgumentDetails
  Extracts the function argument details.

  since: 3.2.0
  return: ?array
end note

note right of Parser::extractReturnType
  Extracts the function return type.

  since: 3.2.0
  return: ?string
end note

note left of Parser::extractArgTypesFromComment
  Extracts argument types from a given comment.

  since: 3.2.0
  return: ?array
end note

note right of Parser::extractArgTypesArguments
  Extracts argument types from a given declaration.

  since: 3.2.0
  return: ?array
end note

note left of Parser::extractReturnTypeFromComment
  Extracts return type from a given declaration.

  since: 3.2.0
  return: ?string
end note

note right of Parser::extractSinceVersion
  Extracts the version number from the @since tag in the given comment.

  since: 3.2.0
  return: ?string
end note

note left of Parser::extractDeprecatedVersion
  Extracts the version number from the deprecated tag in the given comment.

  since: 3.2.0
  return: ?string
end note

note right of Parser::removeWhiteSpaceFromComment
  Remove all white space from each line of the comment

  since: 3.2.0
  return: string
end note

note left of Parser::mergeArgumentTypes
  Merges the types from the comments and the arguments.

  since: 3.2.0
  return: array
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
Super---95d0e03f_24fd_4412_bc2e_f0899fcc3205---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")