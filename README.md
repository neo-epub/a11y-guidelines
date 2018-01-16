# Korean translation of "EPUB3 Accessibility Guidelines"

본 레파지토리는 IDPF에서 제공하는 EPUB3 접근성 가이드라인을 한국어로 번역한 번역본입니다.
저희 회사가 R&D 프로젝트를 수행하면서 참고하기 위해 작성한 문서입니다.
제 부족한 영어 실력으로 발번역을 해 두었으니 크게 도움이 안 되실 겁니다...

*원본 레파지토리: https://github.com/IDPF/a11y-guidelines*

*이하 원문입니다.*

---------

# EPUB 3 Accessibility Guidelines

This repository contains the source pages for the [EPUB 3 Accessibility Guidelines](http://www.idpf.org/accessibility/guidelines/).

## Contributing

Contributions to this project are welcome. You can:

- Report bugs in the [issue tracker](issues/);
- Create a branch of this repository, update the source and create a [pull request](pulls/).

## Updating the Site

### Pushing Updates Live

The accessibility guidelines are now hosted as github pages. After committing an update to this repository, you only need to push the revised pages live using the following command:

```
git subtree push --prefix guidelines origin gh-pages
```

Only contributors with write access to the repository can update the pages.

### Building the EPUB

The web site is also designed to be easily converted into an EPUB Publication for download. To generate the download file after committing new changes, follow these steps:

1. Copy the source files in the /guidelines directory to /build/html/EPUB
2. Run the createEPUB.pl script in /build/html
3. After the script finishes, copy the /build/html/EPUB folder to /build/epub3-accessiblity-guidelines
4. Run epubcheck with the -save option to generate the packaged file (use the -e flag to suppress warnings about file extensions)
5. Copy the generate EPUB file to the /guidelines/book directory

You'll need a working copy of Perl 5 (with the XML::LibXSLT module) and the latest [epubcheck](https://github.com/IDPF/epubcheck/) to create the downloadable file.
